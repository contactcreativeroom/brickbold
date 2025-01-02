<?php

namespace App\Http\Controllers\Front;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Page;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    private $prefix = 'front';
    
    public function index(Request $request) {
        $todayLuxury = Property::orderBy('is_luxury', 'desc')->orderBy('id', 'desc')->limit(6)->get();
        $readyToMove = Property::orderBy('views', 'desc')->limit(4)->get();
        return view($this->prefix.'.home',['todayLuxury' => $todayLuxury, 'readyToMove' => $readyToMove]);
    }
    public function about (Request $request) { 
        return view('front.about');
    }
    public function faq (Request $request) { 
        return view('front.faq');
    }
    public function contact(Request $request) { 
        $properties = Property::orderBy('id', 'desc')->get();
        return view('front.contact',['properties' => $properties]);
    }
    public function contactPost(Request $request) { 
        $validationArray = [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
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
}
