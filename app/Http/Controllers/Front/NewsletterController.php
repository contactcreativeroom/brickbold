<?php

namespace App\Http\Controllers\Front;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Illuminate\Http\Request;

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
        $validationArray = [
            'email' => 'required|email',
            'accept_term_condition' => 'required|in:1',
        ];
        
        $this->validate($request, $validationArray); 
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
}
