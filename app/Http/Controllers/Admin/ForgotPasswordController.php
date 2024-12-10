<?php 
  
namespace App\Http\Controllers\Admin; 
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use DB; 
use Carbon\Carbon;
use App\Models\Admin; 
use Mail; 
use Hash;
use Session;
use Illuminate\Support\Str;
  
class ForgotPasswordController extends Controller
{
      /**
       * Write code on Method
       *
       * @return response()
       */
      public function forgetPassword(Request $request)
      {
        if ($request->isMethod('post')) {
            $email = $request->email;

            $request->validate([
                'email' => 'required|email|exists:admins',
            ]);

            // $emailCount = Admin::where('email',$email)->count();
            // if($emailCount == 0){
            //     Session::flash('result', false);
            //     Session::flash('message', 'Email not found in records');
            //     return redirect('admin/forgot-password');
            // }

            $token = Str::random(64);
    
            DB::table('password_resets')->insert([
                'email' => $request->email, 
                'token' => $token, 
                'created_at' => Carbon::now()
              ]);
    
            // Mail::send('email.forgetPassword', ['token' => $token], function($message) use($request){
            //     $message->to($request->email);
            //     $message->subject('Reset Password');
            // });
    
            Session::flash('result', true);
            Session::flash('message', 'We have e-mailed your password reset link!');
            return back();
        }

         return view('admin.auth.forgot-password');
      }
  
      /**
       * Write code on Method
       *
       * @return response()
       */
      public function resetPassword($token) { 
         return view('admin.auth.reset-password', ['token' => $token]);
      }
  
      /**
       * Write code on Method
       *
       * @return response()
       */
      public function resetPasswordSubmit(Request $request)
      {
          $request->validate([
              //'email' => 'required|email|exists:admins',
              'password' => 'required|string|min:6|confirmed',
              'password_confirmation' => 'required'
          ]);
  
          $updatePassword = DB::table('password_resets')
                              ->where([
                                //'email' => $request->email, 
                                'token' => $request->token
                              ])
                              ->first();

                            print '<pre>'; print_r($updatePassword); die;
  
          if(!$updatePassword){
            Session::flash('result', false);
            Session::flash('message', 'Invalid token!');
              return back()->withInput();
          }
  
          $admin = Admin::where('email', $request->email)
                      ->update(['password' => Hash::make($request->password)]);
 
          DB::table('password_resets')->where(['email'=> $request->email])->delete();
          Session::flash('result', true);
          Session::flash('message', 'Your password has been changed!');
          return redirect('/admin');
      }
}