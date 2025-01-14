<?php

namespace App\Http\Controllers\User;

use App\Helper\Helper;
use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    private $prefix = 'user';
    protected $userAuth;
    private $pagerecords;
    public function __construct()
    {
        $this->pagerecords = config('constants.FRONT_PAGE_RECORDS');
        $this->middleware(function ($request, $next) {
            $this->userAuth = Auth::guard('user')->user();
            return $next($request);
        });
    }
 
    public function profile(){
        $user = $this->userAuth;
        $data=array('row'=>$user);
        return view($this->prefix.'.profile')->with($data);
    }

    public function editProfile(Request $request)
    {
        if ($request->method() == 'POST') {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'address' => 'required',
            ]);

            if ($validator->fails()) {
                Helper::toastMsg(false, 'Validation Error!');
                return back()->withInput()->withErrors($validator);
            };
            $user = $this->userAuth;
            if(isset($request->user_type) && $request->user_type !=''){
                $user->user_type = $request->user_type;
            }
            $user->name = $request->name;
            $user->description = $request->description;
            $user->business_name = $request->business_name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->landline_number = $request->landline_number;
            $user->address = $request->address; 
            $user->gstin = $request->gstin; 
            $user->rera_number = $request->rera_number; 
            $user->website = $request->website; 

            $image = $request->file('profile_image');
            if(isset($image)){
                Helper::uploadImage($image, $user, 'user/'.$user->id, false, 'update', 'profile_image', true, false, true, false);                 
            } 

            if ($user->save()) {
                Helper::toastMsg(true, 'Profile Updated Successfully!');
                return redirect()->route('user.profile');
            }
        }
        return view('user.profile');
    }

    public function changePassword(Request $request){ 
        
        if ($request->isMethod('post')) { 
            $request->validate([
                'old_password' => 'required',
                'new_password' => 'required|min:6|confirmed',
            ]);
 
            $user = $this->userAuth; 
            if (!Hash::check($request->old_password, $user->password)) {
                Helper::toastMsg(false, 'The old password is incorrect!');
                return back()->withInput();
            }
 
            $user->password = Hash::make($request->new_password);
            if ($user->save()) {
                Helper::toastMsg(true, 'Password changed successfully!');
                return redirect()->route('user.profile');
            }
 
            Helper::toastMsg(false, 'Failed to change the password. Please try again.');
            return back();
        }
 
        return view('user.auth.changePassword');
    }



    public function package(){
        $user = $this->userAuth;
        $orders = $user->Orders()->where('status',1)->latest()->paginate($this->pagerecords);
        $data=array('rows'=>$orders); 
        return view($this->prefix.'.package')->with($data);
    }

    public function favorites(){
        $user = $this->userAuth;
        return view('user.favorites', compact('user'));
    }

    public function reviews(){
        $user = $this->userAuth;
        return view('user.reviews', compact('user'));
    }

    

}
