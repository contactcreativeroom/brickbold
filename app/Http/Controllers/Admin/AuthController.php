<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Hash;

class AuthController extends Controller
{
    private $prefix = 'admin';
    public function login(Request $request){
    	if($request->isMethod('post')){
  
            $request->validate([
                'email' => ['required', 'email'],
                'password' => ['required'],
            ]);
            
            $credentials = $request->only('email', 'password');
            $remember = $request->has('remember');
    
            if ( Auth::guard('admin')->attempt($credentials, $remember) ) {
                $request->session()->regenerate();
                if( Auth::guard('admin')->user()->status == config('constants.STATUS.inactive') ){
                    Auth::guard('admin')->logout();
                    Helper::flashMessage(false,'Account deactivated');
                    return redirect()->back();
                }else{
                    Helper::flashMessage(true,'Logged in successfully!');
                    return redirect(route('admin.dashboard'));
                }             
            }            
            Helper::flashMessage(false,'Invalid Credentials');
            return back()->withInput();
    	}
    	return view('admin.auth.login');
    }

    public function logout(Request $request){
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('admin.login'));
    } 
   
    public function forgotPassword(Request $request){

        if ( $request->method() == "POST" ) {
    		$request->validate(['email' => 'required|email']);

            $response = Password::broker('admins')->sendResetLink(
                $request->only('email')
            );

            if ($response === Password::RESET_LINK_SENT) {
                Helper::toastMsg(true, 'Email sent successfully!');
                return back()->with('status', __($response));
            } else {
                Helper::toastMsg(false, 'Something went wrong');
                return back()->withErrors(['email' => [__($response)]]);
            }             
	    
	    }
        return view('admin.auth.forgotPassword');
    } 
 
    public function passwordReset(Request $request) {
        $token = $request->token;
        if ($request->isMethod('post')) {
            $request->validate([
                'token' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:6|confirmed',
            ]);
            $status = Password::broker('admins')->reset(
                $request->only('email', 'password', 'password_confirmation', 'token'),
                function ($admin, $password) {
                    $admin->forceFill([
                        'password' => Hash::make($password),
                    ])->setRememberToken(Str::random(60));

                    $admin->save();
                    event(new PasswordReset($admin));
                }
            );

            if ($status === Password::PASSWORD_RESET) {
                Helper::flashMessage(true, 'Admin password reset successfully!'); 
                return redirect()->route('password.reset-success')->with('status', __($status));
            } else {
                Helper::flashMessage(false, 'Something went wrong with the admin password reset'); 
                return back()->withErrors(['email' => [__($status)]]);
            }
        }
        return view($this->prefix . '.auth.password-reset', ['token' => $token]);
    }

    public function passwordResetSuccess(Request $request){
        return view($this->prefix.'.auth.reset-successfull');
    }

}
