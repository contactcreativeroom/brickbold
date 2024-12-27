<?php

namespace App\Http\Controllers\User;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    private $prefix = 'user';

    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|min:6|confirmed',
            'accept_term_condition' => 'required|in:1',
            'dob' => 'nullable|date',
            'mobile' => 'nullable|digits:10',
        ]);
    
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation errors occurred.',
                'errors' => $validator->errors()->toArray(),
            ], 400);
        }
    
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'dob' => $request->dob,
            'phone' => $request->mobile,
            'password' => bcrypt($request->password),
        ]);
    
        if ($user) {
            Auth::guard('user')->login($user);
            return response()->json([
                'success' => true,
                'redirect_url' => route('user.dashboard'),
                'message' => 'Registered successfully!',
            ], 201);
        }
    
        return response()->json([
            'success' => false,
            'message' => 'Registration failed. Please try again.',
        ], 500);
    }

    public function login(Request $request){
    	if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email|max:255',
                'password' => 'required|min:6',
            ]);
    
            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Validation errors occurred.',
                    'errors' => $validator->errors()->toArray(),
                ], 400);
            }
    
            $credentials = $request->only('email', 'password');
            $remember = $request->has('remember');
    
            if (Auth::guard('user')->attempt($credentials, $remember)) {
                $request->session()->regenerate();
    
                if (Auth::guard('user')->user()->status == config('constants.STATUS.inactive')) {
                    Auth::guard('user')->logout();
                    return response()->json([
                        'success' => false,
                        'message' => 'Account deactivated',
                    ], 403);
                }
    
                return response()->json([
                    'success' => true,
                    'message' => 'Logged in successfully!',
                    'redirect_url' => route('user.dashboard'),
                ], 200);
            }
    
            return response()->json([
                'success' => false,
                'message' => 'Invalid credentials. Please try again.',
            ], 401);
        }
    
        return response()->json([
            'success' => false,
            'message' => 'Invalid request method.',
        ], 405);
    }

    public function logout(Request $request){
        Auth::guard('user')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('home'));
    } 
   
    public function forgotPassword(Request $request){

        if ( $request->method() == "POST" ) {
    		$request->validate(['email' => 'required|email']);

            $response = Password::broker('users')->sendResetLink(
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
        return view('user.auth.forgotPassword');
    } 
 
    public function passwordReset(Request $request) {
        $token = $request->token;
        if ($request->isMethod('post')) { 
            $this->validate($request, [
                'token' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:6|confirmed',
            ]);
            $status = Password::broker('users')->reset(
                $request->only('email', 'password', 'password_confirmation', 'token'),
                function ($user, $password) {
                    $user->forceFill([
                        'password' => Hash::make($password),
                    ])->setRememberToken(Str::random(60));

                    $user->save();
                    event(new PasswordReset($user));
                }
            ); 
            
            if ($status === Password::PASSWORD_RESET) {
                Helper::flashMessage(true, 'user password reset successfully!'); 
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
