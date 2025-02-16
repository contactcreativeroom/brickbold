<?php

namespace App\Http\Controllers\Front;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsletterController extends Controller
{
    private $prefix = 'front';
    protected $userAuth;
    private $pagerecords;

    public function __construct()
    {
        $this->pagerecords = config('constants.FRONT_PAGE_RECORDS');
    }

    public function postData(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'accept_term_condition' => 'required|in:1',
        ]);
         
        if ($validator->fails()) {
            Helper::toastMsg(false, "Validation errors: " . json_encode($validator->errors()->toArray()));
            return back()->withErrors($validator)->withInput();
        }

        $newsletter = new Newsletter(); 
        $newsletter->email = $request->email;
        $newsletter->status = 1;
        $newsletter->save();
        
        if($newsletter){
            $details = array(
                'logo' => Helper::getLogo(),
                'name'=> $request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'interest'=>$request->interest,
                'description'=>$request->message,
             );
            //dispatch(new \App\Jobs\ContactQueue($details));
        } else{
            Helper::toastMsg(false, "Opps! Some error occured.");
            return back(); 
        } 
        Helper::toastMsg(true, 'Thank you for reaching out! You will recieved the info about latest properties.');
        return back(); 
    }

    public function postDataMobileff(Request $request) {
        $validator = Validator::make($request->all(), [
            'mobile' => ['required', 'regex:/^[6-9]\d{9}$/'],
        ]);
         
        if ($validator->fails()) {
            Helper::toastMsg(false, "Validation errors: " . json_encode($validator->errors()->toArray()));
            return back()->withErrors($validator)->withInput();
        }

        $newsletter = new Newsletter(); 
        $newsletter->mobile = $request->mobile;
        $newsletter->status = 1;
        $newsletter->save();
        
        if($newsletter){
            $details = array(
                'logo' => Helper::getLogo(),
                'name'=> $request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'interest'=>$request->interest,
                'description'=>$request->message,
             );
            //dispatch(new \App\Jobs\ContactQueue($details));
        } else{
            Helper::toastMsg(false, "Opps! Some error occured.");
            return back(); 
        } 
        Helper::toastMsg(true, 'Thank you for reaching out! You will recieved the info about latest properties.');
        return back(); 
    }

    public function postDataMobile(Request $request){    	
        $validator = Validator::make($request->all(), [
            'mobile' => ['required', 'regex:/^[6-9]\d{9}$/'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation errors occurred.',
                'errors' => $validator->errors()->toArray(),
            ], 400);
        }   

        $newsletter = new Newsletter(); 
        $newsletter->mobile = $request->mobile;
        $newsletter->status = 1;
        $newsletter->save();

        return response()->json([
            'success' => true,
            'message' => 'Thank you for reaching out! Our agent will contact you shortly.',
            'redirect_url' => Helper::redirectRouteAfterLogin(),
        ], 200);

    }

}
