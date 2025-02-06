<?php

namespace App\Http\Controllers\User;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\OtpCode;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    private $prefix = 'user';

    public function register(Request $request){
        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'role' => 'required',
                'for_type' => 'required',
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email|max:255',
                'mobile' => 'required|digits:10',
                // 'password' => 'required|min:6|confirmed',
                'accept_term_condition' => 'required|in:1',
                // 'dob' => 'nullable|date',
            ]);
        
            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Validation errors occurred.',
                    'errors' => $validator->errors()->toArray(),
                ], 400);
            }
            $password = Helper::generatePassword();
            $user = User::create([
                'user_type' => $request->role,
                'for_type' => $request->for_type,
                'name' => $request->name,
                'email' => $request->email,
                // 'dob' => $request->dob,
                'phone' => $request->mobile,
                'password' => bcrypt($password),
            ]);
        
            if ($user) {
                Auth::guard('user')->login($user);
                $details = array(
                    'logo' => Helper::getLogo(),
                    'user_type'=> $request->user_type,
                    'for_type'=> $request->for_type,
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'phone'=>$request->phone,
                    'password'=>$password,
                );
                dispatch(new \App\Jobs\RegisterQueue($details));
                return response()->json([
                    'success' => true,
                    'redirect_url' => Helper::redirectRouteAfterLogin(),
                    'message' => 'Registered successfully!',
                ], 201);
            }
        
            return response()->json([
                'success' => false,
                'message' => 'Registration failed. Please try again.',
            ], 500);
        }
        return view('user.auth.register');
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
                    'redirect_url' => Helper::redirectRouteAfterLogin(),
                ], 200);
            }
    
            return response()->json([
                'success' => false,
                'message' => 'Invalid credentials. Please try again.',
            ], 401);
        }
    
        return view('user.auth.login');
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

    //Google login start
    public function redirectToGoogle(Request $request){
        Log::info('Google Client ID: ' . config('services.google.client_id'));
        Log::info('Google Redirect URL: ' . config('services.google.redirect'));
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(Request $request){
        try {
            $user = Socialite::driver('google')->user();
            Log::error('Google User detail: ', ['User' => $user]);  
            $findUser = User::where('google_id', $user->id)->first();
    
            if ($findUser) {
                Auth::guard('user')->login($findUser);
                return redirect(Helper::redirectRouteAfterLogin());
            } else {
                $existingUser = User::where('email', $user->email)->first();
                if ($existingUser) {
                    $existingUser->update(['google_id' => $user->id]);
                    Auth::guard('user')->login($existingUser);
                } else {
                    $newUser = User::create([
                        'name'      => $user->name,
                        'email'     => $user->email,
                        'password' => bcrypt('123456'),
                        'google_id' => $user->id,
                    ]);

                    Auth::guard('user')->login($newUser);
                    //return redirect()->route('user.profile');
                }    
                return redirect(Helper::redirectRouteAfterLogin());
            }
        } catch (Exception $e) {
            Log::error('Google Login Error: ', ['error' => $e->getMessage()]);            
            Helper::flashMessage(false, 'Something went wrong during the login process.');
            return redirect()->route('home');
        }
    }
    //Google login end

    //Otp login start
    public function sendOTP(Request $request){
        $request->validate([
            'mobile' => 'required|digits:10',
        ]);

        $mobile = $request->mobile;
        $user = User::where('phone', $mobile)->first();
        // if ($user) {         

            $otp = rand(100000, 999999);
            OtpCode::updateOrCreate(
                ['mobile' => $mobile],
                [
                    'otp' => $otp,
                    'expires_at' => now()->addMinutes(10),
                ]
            );

            
            //send otp code
            $username = config('constants.OTP_LOGIN.USERNAME');
            $password = config('constants.OTP_LOGIN.PASSWORD');
            $headerName = config('constants.OTP_LOGIN.HEADER_NAME');
            $templateId = config('constants.OTP_LOGIN.TEMPLATED_ID');
            $message = "Your OTP for www.brickbold.com is ".$otp.". Enter this code to verify your account and access your real estate listings. It's valid for 10 minutes. BRKBLD";

            $ch = curl_init('https://www.textguru.in/api/v22.0/?');
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
                'username' => $username,
                'password' => $password,
                'source'   => $headerName,
                'dmobile'  => $mobile,
                'dlttempid'=> $templateId,
                'message'  => $message,
            ]));
            //curl_setopt($ch, CURLOPT_POSTFIELDS, "username=$username&password=$password&source=$headerName&dmobile=$mobile&dlttempid=$templateId&message=$message");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
            $data = curl_exec($ch); 
            curl_close($ch);
            
            return response()->json(['success' => true, 'message' => 'OTP sent successfully to mobile .'.$mobile.'. It is valid for 10 minute only.']);
        // } else{
        //     return response()->json([
        //         'success' => false,
        //         'message' => 'User not found with this mobile number.',
        //         'errors' => array('mobile' => [
        //             "User not found with this mobile number."
        //         ]),
        //     ], 400);
        // }
    }

    public function verifyOTP(Request $request){
        $request->validate([
            'mobile' => 'required|digits:10',
            'otp' => 'required|digits:6',
        ]);

        $otpCode = OTPCode::where('mobile', $request->mobile)
            ->where('otp', $request->otp)
            ->where('expires_at', '>', now())
            ->first();

        if (!$otpCode) {
            return response()->json(['message' => 'Invalid or expired OTP.', 'error'=>true], 200);
        }

        // Create or find the user
        $user = User::firstOrCreate(
            ['phone' => $request->mobile],
            ['password' => Hash::make('123456')]
        );
        Auth::guard('user')->login($user);        
        $otpCode->delete();
        // $url = route('user.profile');
        $url = Helper::redirectRouteAfterLogin();

        return response()->json(['success' => true, 'message' => 'Logged in successfully.', 'redirect_url' => $url, 'user' => $user]);
    }
    //Otp login end

}
