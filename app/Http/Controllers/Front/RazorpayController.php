<?php

namespace App\Http\Controllers\Front;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Razorpay\Api\Api;

class RazorpayController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        DB::beginTransaction();

        try {

            $paymentResponse = $request->input('response', []);
            dd($paymentResponse);
            if (count($paymentResponse) > 0 && empty($paymentResponse['razorpay_payment_id'])) {
                Helper::toastMsg(false, "No Payment ID Found");
                return redirect()->back();
            }

            $api = new Api(env('RAZORPAY_API_KEY'), env('RAZORPAY_API_SECRET'));
            $payment = $api->payment->fetch($paymentResponse['razorpay_payment_id']);
            $response = $payment->capture(['amount' => $payment['amount']]);
            Payment::create([
                'r_payment_id' => $response->id,
                'method' => $response->method,
                'currency' => $response->currency,
                'email' => $response->email,
                'phone' => $response->contact,
                'amount' => $response->amount / 100,
                'status' => 'success',
                'json_response' => json_encode((array) $response)
            ]);
 
            Helper::toastMsg(true, "Payment Successful");
            DB::commit();

            return response()->json(['success' => true, 'message' => 'Payment successfully recorded']);

        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('PAYMENT_STORE_ERROR'.$th->getMessage());
            Helper::toastMsg(false, $th->getMessage());
            
            return response()->json(['success' => false, 'error' => 'Internal Server Error'], 500);
        }
    }

    public function failure(Request $request): JsonResponse {
        DB::beginTransaction();

        try {
            $responseData = $request->input('response', []);
            $errorData = $responseData['error'] ?? [];

            Payment::create([
                'r_payment_id' => $errorData['metadata']['payment_id'] ?? null,
                'method' => $errorData['source'] ?? null,
                'currency' => 'INR',
                'email' => '', //email id for the the user
                'phone' => '', // mobile number for the user,
                'amount' => 100, // amount for the payment process
                'status' => 'failed',
                'json_response' => json_encode($responseData)
            ]);

            DB::commit();
            return response()->json(['success' => true, 'message' => 'Payment failure recorded']);

        } catch (\Throwable $th) {
            DB::rollBack();
            Log::error('PAYMENT_FAILURE_ERROR: '.$th->getMessage());
            return response()->json(['success' => false, 'error' => 'Internal Server Error'], 500);
        }
    }
}
