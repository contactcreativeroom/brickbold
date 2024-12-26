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

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->userAuth = Auth::guard('user')->user();
            return $next($request);
        });
    }
 
    public function profile(){
        $user = $this->userAuth;
        return view('user.profile', compact('user'));
    }

    public function editProfile(Request $request)
    {
        if ($request->method() == 'POST') {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email',

            ]);

            if ($validator->fails()) {
                Helper::toastMsg(false, 'Validation Error!');
                return back()->withInput()->withErrors($validator);
            };
            $user = $this->userAuth;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;

            $image = $request->file('image');
            if(isset($image)){
                Helper::uploadImage($image, $user, 'user/profile', false, 'update', 'image', true, false, true, false);                 
            } 

            if ($user->save()) {
                Helper::toastMsg(true, 'Profile Updated Successfully!');
                return redirect()->route('user.profile');
            }
        }
        return view('user.auth.updateprofile');
    }

    public function changePassword(Request $request)
    {
        if ($request->method() == 'POST') {
            $rules = [
                'old_password' => 'required',
                'new_password' => 'required',
                'confirm_password' => 'required|same:new_password',
            ];

            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {

                Helper::toastMsg(false, 'Validation Error!');
                return back()->withInput()->withErrors($validator);
            }

            $user = $this->userAuth;
            $old_password = $request->old_password;
            $new_password = $request->new_password;
            $confirm_password = $request->confirm_password;

            if ($old_password == $new_password) {
                Helper::toastMsg(false, 'Old Password and New Password cannot be same!');
                return back();
            }
            if (Hash::check($old_password, $user->password)) {
                $user->password = Hash::make($new_password);
                if ($user->save()) {

                    Helper::toastMsg(true, 'Password Changed Successfully!');
                    return redirect()->route('user.profile');
                }
            } else {

                Helper::toastMsg(false, 'Old Password is Incorrect!');
                return back();
            }
        }
        return view('user.auth.changePassword');
    }


    public function package(){
        $user = $this->userAuth;
        return view('user.package', compact('user'));
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
