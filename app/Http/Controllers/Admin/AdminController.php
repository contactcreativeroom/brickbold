<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helper\Helper;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Password;

class AdminController extends Controller
{
    protected $adminAuth;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->adminAuth = Auth::guard('admin')->user();
            return $next($request);
        });
    }
 
    public function profile()
    {
        $admin = $this->adminAuth;
        return view('admin.auth.profile', compact('admin'));
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
            $admin = $this->adminAuth;
            $admin->name = $request->name;
            $admin->email = $request->email;
            $admin->phone = $request->phone;

            $image = $request->file('image');
            if(isset($image)){
                Helper::uploadImage($image, $admin, 'subadmin/'.$admin->id, false, 'update', 'image', true, false, true, false);                 
            } 

            if ($admin->save()) {
                Helper::toastMsg(true, 'Profile Updated Successfully!');
                return redirect()->route('admin.profile');
            }
        }
        return view('admin.auth.updateprofile');
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

            $admin = $this->adminAuth;
            $old_password = $request->old_password;
            $new_password = $request->new_password;
            $confirm_password = $request->confirm_password;

            if ($old_password == $new_password) {
                Helper::toastMsg(false, 'Old Password and New Password cannot be same!');
                return back();
            }
            if (Hash::check($old_password, $admin->password)) {
                $admin->password = Hash::make($new_password);
                if ($admin->save()) {

                    Helper::toastMsg(true, 'Password Changed Successfully!');
                    return redirect()->route('admin.profile');
                }
            } else {

                Helper::toastMsg(false, 'Old Password is Incorrect!');
                return back();
            }
        }
        return view('admin.auth.changePassword');
    }

     
}
