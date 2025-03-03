<?php

namespace App\Http\Controllers\Front;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\Bank;
use App\Models\Contact;
use App\Models\HomeLoanEnquiry;
use App\Models\Package;
use App\Models\Page;
use App\Models\Property;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Razorpay\Api\Api;

class HomeController extends Controller
{
    private $prefix = 'front';
    protected $userAuth;
    private $pagerecords;

    public function __construct()
    {
        $this->pagerecords = config('constants.FRONT_PAGE_RECORDS');
    }
    
    public function index(Request $request) {
        $todayLuxury = Property::whereIn('status', [1,3])->orderBy('is_luxury', 'desc')->orderBy('id', 'desc')->limit(6)->get();
        $readyToMove = Property::whereIn('status', [1,3])->orderBy('views', 'desc')->limit(4)->get();
        $properties = Property::whereIn('status', [1,3])->orderBy('views', 'desc')->get();
        $testimonials = Testimonial::orderBy('priority', 'asc')->limit(10)->get();
        return view($this->prefix.'.home',['properties' => $properties,'todayLuxury' => $todayLuxury, 'readyToMove' => $readyToMove, 'testimonials' => $testimonials]);
    }
    public function about (Request $request) { 
        return view('front.about');
    }
    public function faq (Request $request) { 
        return view('front.faq');
    }
    public function contact(Request $request) { 
        $properties = Property::whereIn('status', [1,3])->orderBy('id', 'desc')->get();
        return view('front.contact',['properties' => $properties]);
    }
    public function contactPost(Request $request) { 
        $validationArray = [
            'name' => ['required', 'regex:/^[A-Za-z\s]+$/', 'min:3', 'max:30'],
            'email' => 'required|email',
            'phone' => ['required', 'regex:/^[6-9]\d{9}$/'],
            'message' => 'required',
        ];
        
        $this->validate($request, $validationArray); 
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->interest = $request->interest;
        $contact->message = $request->message;
        $contact->status = 1;
        $contact->save();
        
        if($contact){
            $details = array(
                'logo' => Helper::getLogo(),
                'name'=> $request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'interest'=>$request->interest,
                'description'=>$request->message,
             );
            dispatch(new \App\Jobs\ContactQueue($details));
        } else{
            Helper::toastMsg(false, "Opps! Some error occured.");
            return back(); 
        } 
        Helper::toastMsg(true, 'Thank you for reaching out! Your inquiry has been successfully submitted. One of our real estate experts will get in touch with you soon.');
        return redirect()->route('contact');
    }
    public function page($slug){    
        $page = Page::where(['slug' => $slug])->first();
        if(!$page){
            return to_route('home');
        }
        return view($this->prefix.'.page')->with(compact('page'));

    }

    public function packages(Request $request){  
        

        $packages = Package::where('status', 1);
        if (Auth::guard('user')->check()) {
            $user = Auth::guard('user')->user();
            $packages->where('profile', $user->user_type) ;
        } else{
            if ($request->filled('profile')) {
                $profile = $request->profile; 
                $packages->where('profile', $profile) ;
            } else{
                $packages->where('profile', 'Owner') ;
            }

            // Helper::toastMsg(false, "Please log in first to view compatible packages.");
            // return redirect()->route('login'); 
        }       

        if ($request->filled('type')) {
            $type = $request->type; 
            $packages->where('type', $type) ;
        } else{
            $packages->where('type', 'SELL') ;
        }

        if ($request->filled('property_type')) {
            $property_type = $request->property_type; 
            $packages->where('property_type', $property_type) ;
        } else{
            $packages->where('property_type', 'Residential') ;
        }

        $packages = $packages->paginate($this->pagerecords)->appends([
            'profile' => $request->get('profile'),
            'type' => $request->get('type'),
            'property_type' => $request->get('property_type')
        ]); 
        //$packages =  Package::where('status', 1)->latest()->get(); 
        //return $headings = $packages[0]->fields;
        return view($this->prefix.'.packages',['rows' => $packages]);
    }

    public function homeloan(Request $request){  
        $bank =  Bank::where('status', 1)->latest()->get(); 
        return view($this->prefix.'.home-loan',['rows' => $bank]);
    }

    public function bankPost(Request $request) { 
        
        $validationArray = [
            'loan_amount' => 'required', 
            'phone' => ['required', 'regex:/^[6-9]\d{9}$/'],
            'city' => 'required',
        ];
        
        $this->validate($request, $validationArray); 

        $homeLoanEnquiry = new HomeLoanEnquiry();
        $homeLoanEnquiry->amount = $request->loan_amount;
        $homeLoanEnquiry->phone = $request->phone;
        $homeLoanEnquiry->city = $request->city;
        $homeLoanEnquiry->finalized = $request->loan_property;
        $homeLoanEnquiry->status = 1;
        $homeLoanEnquiry->save();

        $details = array(
            'logo' => Helper::getLogo(),
            'amount'=> config('constants.CURRENCIES.symbol').Helper::priceFormat($request->loan_amount),
            'phone'=>$request->phone,
            'city'=>$request->city,
            'finalized'=>$request->loan_property,
         );
        dispatch(new \App\Jobs\LoanEnquiryQueue($details));

        Helper::toastMsg(true, 'Thank you for reaching out! One of our experts will get in touch with you soon.');
        return back(); 
    }
}
