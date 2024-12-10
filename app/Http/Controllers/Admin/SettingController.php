<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Setting;
use Hamcrest\Core\SetTest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Helper;
use Session;
use DB;
use Mail;
use Hash;
use Image;


class SettingController extends Controller
{
    public $successStatus=200;
    private $prefix = 'admin';
    private $pagerecords;

    public function __construct(){
    	$this->middleware('admin');
        $this->pagerecords = config('constants.ADMIN_PAGE_RECORDS');
    }

    public function logo(Request $request){
        
        $lightLogoDB=Setting::where('key','light_logo')->first();
        $darkLogoDB=Setting::where('key','dark_logo')->first();

        

        if ($request->isMethod('post')) {
            // $page = $request->page;

            $lightLogo = $request->file('light_logo');
            $darkLogo = $request->file('dark_logo');

            $validationArray=array(
                'light_logo'=>'image|mimes:jpeg,jpg,png,gif',
                'dark_logo'=>'image|mimes:jpeg,jpg,png,gif'
            );
    
           
            $this->validate($request, $validationArray);
    
            if(isset($lightLogo)){
                $queryFlag=true;
                if($lightLogo->getMimeType()=='image/jpeg'){
                    $fName=$lightLogo->getClientOriginalName();
                    $arr=explode('.',$fName);
                    $extVal=end($arr);
                    $extension='.'.$extVal;
                }else if($lightLogo->getMimeType()=='image/png'){
                    $extension='.png';
                }else{
                    $extension = $lightLogo->getClientOriginalExtension();
                }
                $name=md5(time()+rand(10,1000));
                $imageOld = $lightLogoDB->value;
                Storage::disk('public')->delete('light-logo/'.$imageOld);

                Storage::disk('public')->delete('light-logo/small/'.$imageOld);

                Storage::disk('public')->put('light-logo/'.$name.$extension,file::get($lightLogo));
                // $thumb = Image::make($lightLogo->getRealPath())->resize(300, 280, function ($constraint) {
                //     $constraint->aspectRatio(); //maintain image ratio
                // });
                // Storage::disk('public')->put('light-logo/small/'.$name.$extension,  (string) $thumb->encode());
    
                $lightLogoDB->value = $name.$extension;                
                $lightLogoDB->save();                
            }

            if(isset($darkLogo)){
                $queryFlag=true;
                if($darkLogo->getMimeType()=='image/jpeg'){
                    $fName=$darkLogo->getClientOriginalName();
                    $arr=explode('.',$fName);
                    $extVal=end($arr);
                    $extension='.'.$extVal;
                }else if($darkLogo->getMimeType()=='image/png'){
                    $extension='.png';
                }else{
                    $extension = $darkLogo->getClientOriginalExtension();
                }
                $name=md5(time()+rand(10,1000));
                $imageOld = $darkLogoDB->value;
                Storage::disk('public')->delete('dark-logo/'.$imageOld);

                Storage::disk('public')->delete('dark-logo/small/'.$imageOld);

                Storage::disk('public')->put('dark-logo/'.$name.$extension,file::get($darkLogo));
                // $thumb = Image::make($darkLogo->getRealPath())->resize(300, 280, function ($constraint) {
                //     $constraint->aspectRatio(); //maintain image ratio
                // });
                // Storage::disk('public')->put('dark-logo/small/'.$name.$extension,  (string) $thumb->encode());
    
                $darkLogoDB->value = $name.$extension;                
                $darkLogoDB->save();                
            }

            Helper::flashMessage(true,'Logo updated successfully!');

        }

        $data=array('light' => $lightLogoDB, 'dark' => $darkLogoDB);

        
        return view($this->prefix.'.setting.logo')->with($data);
    }

  

    
}