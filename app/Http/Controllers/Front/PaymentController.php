<?php

namespace App\Http\Controllers\Front;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Package;
use App\Models\Payment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Razorpay\Api\Api;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{
    private $prefix = 'front';
    protected $userAuth;
    private $pagerecords;

    public function __construct()
    {
        $this->pagerecords = config('constants.FRONT_PAGE_RECORDS');
    }
    
    public function createOrder(Request $request)
    { 
        $api = new Api(config('services.razorpay.key'), config('services.razorpay.secret'));
        $package = Package::findOrFail($request->package_id);
        $amount = $package->grand_price * 100;
        $packageFields = $package->fields()->get();
        $fields=[];
        foreach($packageFields as $packageField){
            $fields[$packageField->heading] = $packageField->value;
        }
        $user = Auth::guard('user')->user();
        $order = $user->Order()->create([
            'package_id' => $package->id, 
            'package_name' => $package->property_type.' '.$package->type.' '.$package->name,
            'package_id' => $package->id, 
            'package_type' => $package->type,
            'package_value' => serialize($fields),
            'package_price' => $package->price, 
            'discount' => $package->discount, 
            'grand_price' => $package->grand_price, 
            'post_property' => $package->post_property, 
            'contacts' => $package->unit, 
            'days' => $package->days, 
            'status' => 0
        ]);

        $apiOrder = $api->order->create([
            'receipt' => 'order_' . $order->id .'_package_'.$package->id,
            'amount' => $amount,
            'currency' => 'INR',
            'payment_capture' => 0,
        ]);

        if ($order) {
            $order->razorpay_order_id = $apiOrder->id;
            $order->save();
        }

        return response()->json([
            'api_order_id' => $apiOrder->id,
            'order_id' => $order->id,
            'key' => config('services.razorpay.key'),
            'amount' => $amount,
            'name' => $package->name,
            'description' => "Upgrade to the {$package->name} package.",
        ]);
    }

    public function handlePayment(Request $request)
    {
        $api = new Api(config('services.razorpay.key'), config('services.razorpay.secret'));
        $user = Auth::guard('user')->user();
        // Capture the payment using the Razorpay Payment ID
        try {
            $payment = $api->payment->fetch($request->razorpay_payment_id);
            $order = Order::where('razorpay_order_id', $request->razorpay_order_id)->first();
            if ($order) {
                $order->status = 1;
                $order->save();
            }
            $captureAmmount = $order->grand_price*100 ;
            $response = $payment->capture(['amount' => $captureAmmount]);
            $amount = $response->amount / 100 ; 
            // Store successful payment details in the database
            $user->payment()->create([
                'r_payment_id' => $response->id,
                'order_id' => $request->order_id,
                'package_id' => $request->package_id,
                'method' => $response->method,
                'currency' => $response->currency,
                'email' => $response->email,
                'phone' => $response->contact,
                'amount' => $amount,
                'json_response' => json_encode((array) $response),
                'status' => 1,
            ]);

            $user->subscription()->create([
                'order_id' => $order->id,
                'package_id' => $request->package_id,
                'package_type' => $order->package_type,
                'post_property' => $order->post_property,
                'contacts' => $order->contacts,
                'days' => $order->days,
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now()->addDays($order->days),
                'status' => 1,
            ]);
            $package = Package::find($request->package_id);
            if ($user->phone) {
                $mobile = $user->phone;
                $templateId = config('constants.MOBILE_SMS.TEMPLATED_ID_PAYMENT');
                $message = "Hi, ".$user->name." your payment has been successfully processed. Your package is activated. Brickbold ";
                Helper::sentSMS($mobile, $message, $templateId);
            }
            if($user->email){
                $details = array(
                    'logo' => Helper::getLogo(),
                    'name'=> $user->name,
                    'amount'=> config('constants.CURRENCIES.symbol').$amount,
                    'email'=> $user->email,
                    'package_name'=>$package?->name,
                    'package_days'=>$package?->days,
                 );
                dispatch(new \App\Jobs\PaymentSuccess($details));
            }
            return response()->json(['success' => true, 'message' => 'Payment successfully captured']);

        } catch (\Exception $e) {
            $order = Order::where('razorpay_order_id', $request->razorpay_order_id)->first();
            $failedAmount = $order ? $order->grand_price : 0;

            if ($user->phone) {
                $mobile = $user->phone;
                $templateId = config('constants.MOBILE_SMS.TEMPLATED_ID_PAYMENT_FAIL');
                $message = "Hi! We were unable to process your payment on Brickbold. Please check your payment details and try again. Visit ".route('packages');
                Helper::sentSMS($mobile, $message, $templateId);
            }
            Helper::sentSMS($mobile, $message, $templateId);

            if($user->email){
                $details = array(
                    'logo' => Helper::getLogo(),
                    'name'=> $user->name,
                    'email'=> $user->email,
                    'amount'=> config('constants.CURRENCIES.symbol').$failedAmount,
                    'error'=>$e->getMessage(),
                );
                dispatch(new \App\Jobs\PaymentFail($details));
            }
            return response()->json(['success' => false, 'message' => 'Payment failed', 'error' => $e->getMessage()]);
        }
    }

    public function handleFailedPayment(Request $request)
    {
        $api = new Api(config('services.razorpay.key'), config('services.razorpay.secret'));

        // Fetch payment details from Razorpay
        try {
            $payment = $api->payment->fetch($request->razorpay_payment_id);

            // Store failed payment details in the database
            Payment::create([
                'r_payment_id' => $payment->id,
                'method' => $payment->method,
                'currency' => $payment->currency,
                'email' => $payment->email,
                'phone' => $payment->contact,
                'amount' => $payment->amount / 100, // Convert amount to INR
                'json_response' => json_encode((array) $payment),
                'status' => 0,
            ]);

            // Optionally, update order status to 'failed' or 'cancelled'
            $order = Order::where('razorpay_order_id', $request->razorpay_order_id)->first();
            if ($order) {
                $order->status = 'failed';
                $order->save();
            }

            return response()->json(['success' => false, 'message' => 'Payment failed', 'error' => $payment->error_description]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Payment failed', 'error' => $e->getMessage()]);
        }
    }

    public function handleWebhook(Request $request)
    {
        $webhookSecret = 'your-webhook-secret';
        $payload = $request->getContent();
        $signature = $request->header('X-Razorpay-Signature');

        // Verify the webhook signature
        $api = new Api(config('services.razorpay.key'), config('services.razorpay.secret'));
        if ($api->utility->verifyWebhookSignature($payload, $signature, $webhookSecret)) {
            $event = json_decode($payload);

            if ($event->event == 'payment.captured') {
                // Handle successful payment
                $payment = $event->payload->payment;
                $this->handlePaymentFromWebhook($payment);
            } elseif ($event->event == 'payment.failed') {
                // Handle failed payment
                $payment = $event->payload->payment;
                $this->handleFailedPaymentFromWebhook($payment);
            }
        }

        return response()->json(['status' => 'success']);
    }

    public function handlePaymentFromWebhook($payment)
    {
        // Handle successful payment from webhook and store payment
        Payment::create([
            'r_payment_id' => $payment->id,
            'method' => $payment->method,
            'currency' => $payment->currency,
            'email' => $payment->email,
            'phone' => $payment->contact,
            'amount' => $payment->amount / 100,
            'status' => 'success',
            'json_response' => json_encode((array) $payment),
        ]);
    }

    public function handleFailedPaymentFromWebhook($payment)
    {
        // Handle failed payment from webhook and store payment
        Payment::create([
            'r_payment_id' => $payment->id,
            'method' => $payment->method,
            'currency' => $payment->currency,
            'email' => $payment->email,
            'phone' => $payment->contact,
            'amount' => $payment->amount / 100,
            'status' => 'failed',
            'json_response' => json_encode((array) $payment),
        ]);
    }
}
