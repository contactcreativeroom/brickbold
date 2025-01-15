<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Helper;
use App\Http\Controllers\Controller;

use App\Models\Setting;
use Hamcrest\Core\SetTest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
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
                $imageOld = $lightLogoDB?->value;
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

    public function settings(Request $request){ 

        $address = Setting::where('key','address')->first();
        $addressDB = $address ? $address->value : null;
        $phone = Setting::where('key','phone')->first();
        $phoneDB = $phone ? $phone->value : null;
        $whatsapp = Setting::where('key','whatsapp')->first();
        $whatsappDB = $whatsapp ? $whatsapp->value : null;
        $email = Setting::where('key','email')->first();
        $emailDB = $email ? $email->value : null;
        $lightLogo = Setting::where('key','light_logo')->first();
        $lightLogoDB = $lightLogo ? $lightLogo->value : null;
        $darkLogo = Setting::where('key','dark_logo')->first();
        $darkLogoDB = $darkLogo ? $darkLogo->value : null;
        $favicon = Setting::where('key','favicon')->first();
        $faviconDB = $favicon ? $favicon->value : null;
        $seoTitle = Setting::where('key','seo_title')->first();
        $seoTitleDB = $seoTitle ? $seoTitle->value : null;
        $seoDescription = Setting::where('key','seo_description')->first();
        $seoDescriptionDB = $seoDescription ? $seoDescription->value : null;
        $seoKeywords = Setting::where('key','seo_keywords')->first();
        $seoKeywordsDB = $seoKeywords ? $seoKeywords->value : null;
         
 

        if ($request->isMethod('post')) {
 
            $addressForm = trim($request->input('address'));
            $countryCodeForm = trim($request->input('country_code'));
            $phoneForm = trim($request->input('phone'));
            $whatsappForm = trim($request->input('whatsapp'));
            $emailForm = trim($request->input('email'));
            
            $lightLogoForm = $request->file('light_logo');
            $darkLogoForm = $request->file('dark_logo');
            $faviconForm = $request->file('favicon');

            $seoTitleForm = $request->input('seo_title');
            $seoDescriptionForm = $request->input('seo_description');
            $seoKeywordsForm = $request->input('seo_keywords');

            $validationArray=array(
                'address'=>'',
                'phone'=>'',
                'email'=>'',
                'light_logo'=>'image|mimes:jpeg,jpg,png,gif',
                'dark_logo'=>'image|mimes:jpeg,jpg,png,gif',
                //'favicon'=>'image|mimes:jpeg,jpg,png,svg,ico',
                'favicon'=>'mimes:jpeg,jpg,png,svg,ico',
                'seo_title'=>'',
                'seo_description'=>'',
                'seo_keywords'=>'',
            );

            //print $countryForm; die;
    
            $this->validate($request, $validationArray); 

            if($addressDB != $addressForm){
                if($address){
                    $address->update(['value' => $addressForm]);
                }else{
                    Setting::create(['key' => 'address', 'value' => $addressForm]);
                }
            } 

            if($phoneDB != $phoneForm){
                if($phone){
                    $phone->update(['value' => $phoneForm]);
                }else{
                    Setting::create(['key' => 'phone', 'value' => $phoneForm]);
                }
            }

            if($whatsappDB != $whatsappForm){
                if($whatsapp){
                    $whatsapp->update(['value' => $whatsappForm]);
                }else{
                    Setting::create(['key' => 'whatsapp', 'value' => $whatsappForm]);
                }
            }           

            if($emailDB != $emailForm){
                if($email){
                    $email->update(['value' => $emailForm]);
                }else{
                    Setting::create(['key' => 'email', 'value' => $emailForm]);
                }
            }
 

            if(isset($lightLogoForm)){
                if($lightLogo){
                    // image, model, directory, is_directory_id, add_or_update, column_name ,is_column_update, is_thumb, delete_prev_image, sub_folder_id
                    Helper::uploadImage($lightLogoForm, $lightLogo, 'logo', false, 'update', 'value', true, false, true, false);
                }else{
                    $lightLogo = Setting::create(['key' => 'light_logo']);
                    // image, model, directory, is_directory_id, add_or_update, column_name ,is_column_update, is_thumb, delete_prev_image, sub_folder_id
                    Helper::uploadImage($lightLogoForm, $lightLogo, 'logo', false, 'add', 'value', true, false, false, false);
                }
            }

            if(isset($darkLogoForm)){
                if($darkLogo){
                    // image, model, directory, is_directory_id, add_or_update, column_name ,is_column_update, is_thumb, delete_prev_image, sub_folder_id
                    Helper::uploadImage($darkLogoForm, $darkLogo, 'logo', false, 'update', 'value', true, false, true, false);
                }else{
                    $darkLogo = Setting::create(['key' => 'dark_logo']);
                    // image, model, directory, is_directory_id, add_or_update, column_name ,is_column_update, is_thumb, delete_prev_image, sub_folder_id
                    Helper::uploadImage($darkLogoForm, $darkLogo, 'logo', false, 'add', 'value', true, false, false, false);
                }
            }

            if(isset($faviconForm)){
                if($favicon){
                    // image, model, directory, is_directory_id, add_or_update, column_name ,is_column_update, is_thumb, delete_prev_image, sub_folder_id
                    Helper::uploadImage($faviconForm, $favicon, 'favicon', false, 'update', 'value', true, false, true, false);
                }else{
                    $favicon = Setting::create(['key' => 'favicon']);
                    // image, model, directory, is_directory_id, add_or_update, column_name ,is_column_update, is_thumb, delete_prev_image, sub_folder_id
                    Helper::uploadImage($faviconForm, $favicon, 'favicon', false, 'add', 'value', true, false, false, false);
                }
            }

            if($seoTitleDB != $seoTitleForm){
                if($seoTitle){
                    $seoTitle->update(['value' => $seoTitleForm]);
                }else{
                    Setting::create(['key' => 'seo_title', 'value' => $seoTitleForm]);
                }
            }

            if($seoDescriptionDB != $seoDescriptionForm){
                if($seoDescription){
                    $seoDescription->update(['value' => $seoDescriptionForm]);
                }else{
                    Setting::create(['key' => 'seo_description', 'value' => $seoDescriptionForm]);
                }
            }

            if($seoKeywordsDB != $seoKeywordsForm){
                if($seoKeywords){
                    $seoKeywords->update(['value' => $seoKeywordsForm]);
                }else{
                    Setting::create(['key' => 'seo_keywords', 'value' => $seoKeywordsForm]);
                }
            }            

            Helper::flashMessage(true, 'Settings updated successfully!');

            return redirect()->back();
        }


        $data=array( 'addressDB' => $addressDB, 'phoneDB' => $phoneDB, 'whatsappDB' => $whatsappDB,'emailDB' => $emailDB, 'lightLogoDB' => $lightLogoDB, 'darkLogoDB' => $darkLogoDB, 'faviconDB' => $faviconDB, 'seoTitleDB' => $seoTitleDB, 'seoDescriptionDB' => $seoDescriptionDB, 'seoKeywordsDB' => $seoKeywordsDB);
        return view($this->prefix.'.setting.logo')->with($data);
    }

    
}