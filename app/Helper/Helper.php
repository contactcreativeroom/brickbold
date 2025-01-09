<?php
namespace App\Helper;

use App\Models\User;


use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Srmklive\PayPal\Services\PayPal as PayPalClient;

use Image;

use Twilio\Rest\Client;
use Carbon\Carbon;
use Auth;
use Session;
use DB;
use Arr;
use Route; 
use Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use Mail;
use App\Models\Category;
use App\Models\Media;
use App\Models\MetaDetails;
use App\Models\Page;
use App\Models\Service;
use App\Models\ServiceTravellingRate;
use App\Models\Setting;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class Helper
{
    public static function formatChatDate($date){
        $carbonDate = Carbon::parse($date);
        $now = Carbon::now();

        if ($carbonDate->isToday()) {
            return $carbonDate->format('h:i A'); // e.g., "10:15 AM"
        } elseif ($carbonDate->isYesterday()) {
            return 'Yesterday'; // e.g., "Yesterday"
        } elseif ($carbonDate->year === $now->year) {
            return $carbonDate->format('M j'); // e.g., "Nov 13"
        } else {
            return $carbonDate->format('M j, Y'); // e.g., "Nov 13, 2023"
        }
    }

    public static function formatStringDate($date, $time = false) {
        if ($date) {
            $dateTime = new \DateTime($date);
            if(!$time){
                return $dateTime->format(self::universalDateFormat());
            }else{
                return $dateTime->format(self::universalDateTimeFormat());
            }
        }
        return '';
    }

    public static function universalDateTimeFormat(){
        return 'F j, Y, H:i';
    }

    public static function universalDateFormat(){
        return 'F j, Y';
    }

    public static function uploadImage($image, $model, $directory, $isDirectoryID, $operation, $columnName ,$isColumn = false, $isThumb = false, $deletePrevImage = true, $subFolderID = false){
        
        if($image->getMimeType()=='image/jpeg'){
            $fName=$image->getClientOriginalName();
            $arr=explode('.',$fName);
            $extVal=end($arr);
            $extension='.'.$extVal;
        }else if($image->getMimeType()=='image/png'){
            $extension='.png';
        }else{
            $extension = '.'.$image->getClientOriginalExtension(); 
        }

        $name=md5(time()+rand(10,1000));
        $saveName=$name.$extension; 

        $finalDirectory = $directory;

        if($isDirectoryID){
            $rowIDFolder = $subFolderID ? $subFolderID : $model->id;
            $finalDirectory = $directory.'/'.$rowIDFolder;
        } 

        if($operation == 'update' && $deletePrevImage){
            
            if(isset($model->{$columnName})){
                $imageOld = $model->{$columnName};
                Storage::disk('public')->delete($finalDirectory.'/'.$imageOld);
                if($isThumb){
                    Storage::disk('public')->delete($finalDirectory.'/thumb/'.$imageOld);
                }
            }
        }

        Storage::disk('public')->put($finalDirectory.'/'.$saveName,file::get($image));
        
        if($isThumb){
            $manager = new ImageManager(new Driver());
            $thumb = $manager->read($image->getRealPath())->resize(320, null, function ($constraint) {
                $constraint->aspectRatio(); //maintain image ratio
            });
            Storage::disk('public')->put($finalDirectory.'/thumb/'.$saveName,  (string) $thumb->encode());
        }

        if($isColumn){
            $model->{$columnName} = $saveName;
            $model->save();
        }else{
            $model->create([$columnName=>$saveName]);
        }

        return $saveName;
         
    }

    public static function uploadImages($images, $model, $directory,  $isDirectoryID, $operation, $columnName, $isColumn, $isThumb, $deletePrevImage, $subFolderID){
        
        foreach($images as $image){
            // image, model, directory, is_directory_id, add_or_update, is_column_update, is_thumb, delete_prev_image, sub_folder_id
            Self::uploadImage($image, $model, $directory,  $isDirectoryID, $operation, $columnName, $isColumn, $isThumb, $deletePrevImage, $subFolderID);
        }
        
    }
    
    public static function toastMsg($response_status = true, $response_msg = ""){
       
        Session::flash('result', $response_status);
        Session::flash('message', $response_msg);
    }
    
    public static function flashMessage($result = true, $message = "") {
        Session::flash('result', $result);
        Session::flash('message', $message);
        return;
    }

    public static function getInitialsLetter($name){
        return substr($name, 0, 1);
    }


    public static function sendSms($smsData)
    {	
    	
        //$receiverNumber = getenv("COUNTRY_CODE").$data['mobile'];
        $to = config('constants.SMS.mobile');
        if($to == null || $to == ''){
            return false;
        }
        //$message = $data['msg'];
        $message = 'Hello Admin, there is a new ticket raised by a customer named '.$smsData['name'].', of product: '.$smsData['productName'].' with serial number: '.$smsData['productSerialNumber'];
        $account_sid = getenv("TWILIO_SID");
        $auth_token = getenv("TWILIO_TOKEN");
        $twilio_number = getenv("TWILIO_FROM");

        try {
  
            
            $url = 'https://api.twilio.com/2010-04-01/Accounts/'.$account_sid.'/Messages.json';
            $payload = [
                'From' => $twilio_number,
                'To' => $to,
                'Body'   => $message
            ];

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_USERPWD, $account_sid . ':' . $auth_token );
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));

            $result = curl_exec($ch);
            //print '<pre>'; print_r($result); die;

            if (curl_errno($ch)) {
                return array( 'result' => false, 'message' => 'Unable to send sms!' );
            }
            curl_close($ch);

            return array( 'result' => true, 'message' => 'SMS sent successfully!', 'details' => json_decode($result, true) );
  
        } catch (Exception $e) {
           
            return [ 'result' => false, 'message' => "Error: ".$e->getMessage() ];
        }
        
        return ['result' => false, 'message' => 'Unable to send sms!'];

    }

    public static function sendNotification($data)
    {	    
        $title = $data['title'];
        $body = $data['body'];
        $tokens = $data['tokens'];
        
        $url = 'https://fcm.googleapis.com/fcm/send';

        $serverKey = 'AAAAQitWSWY:APA91bHOZFGcsq-Usjo4ecCO4fWipwD78Tlb5CGn4rUjCRxMzJWxjBN58kpL5boRY5erM7P0VhSv58wBGdiMDG73NntaL40UU6DXwkUfVUGQiEZXWxDglU-wooz2Zh5J4uWnLi8rtYqt';

        $additionalParams = [
            // Add your additional parameters here
            'chat_type' => $data['chat_type'] ?? null,
            'ticket_id' => $data['ticket_id'] ?? null,
        ];

        // Filter out null values
        $additionalParams = array_filter($additionalParams, function($value) {
            return !is_null($value);
        });

            $data = [
                "registration_ids" => $tokens,
                "notification" => [
                    "title" => $title,
                    "body" => $body,  
                ],
                // "data" => $additionalParams // Add additional parameters here
            ];
            if( count( $additionalParams ) > 0 ){
                $data['data'] = $additionalParams; // Add additional parameters here
            }
            $encodedData = json_encode($data);
        
            $headers = [
                'Authorization:key=' . $serverKey,
                'Content-Type: application/json',
            ];
        
            $ch = curl_init();
            
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
            // Disabling SSL Certificate support temporarly
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $encodedData);
            // Execute post
            $result = curl_exec($ch);
            if ($result === FALSE) {
                die('Curl failed: ' . curl_error($ch));
            }        
            // Close connection
            curl_close($ch);
            // FCM response

    }


    /**********start********** */
    
    public static function getSeoUrl($data)
    {
        $string = $data['string'] ?? "1";
        $table = $data['table'] ?? "listings";
        $id = $data['id'] ?? 0;

        // replace non letter or digits by -
        $string = preg_replace('~[^\\pL\d]+~u', '-', $string);
        // trim
        $string = trim($string, '-');
        // transliterate
        $string = iconv('utf-8', 'us-ascii//TRANSLIT', $string);
        // lowercase
        $string = strtolower($string);
        // remove unwanted characters
        $string = preg_replace('~[^-\w]+~', '', $string);
        $oldString = $string;



        if ($id > 0) {
            $qry = DB::table($table)->select('id')->where('slug', $string)->where('id', '!=', $id)->get();
        } else {
            $qry = DB::table($table)->select('id')->where('slug', $string)->get();
        }

        if (count($qry) > 0) {

            $number =  1;
            $string = $string . "-" . $number;
            $string = self::checkDuplicateUrl($table, $string, $number, $oldString);
            $string = $string;
        }

        return $string;
    }

    public static function checkDuplicateUrl($table, $string, $number, $oldString)
    {
        $qry = DB::table($table)->select('id')->where('slug', $string)->get();


        if (count($qry) > 0) {
            $number = $number + 1;
            $string = $oldString . "-" . $number;
            $string = self::checkDuplicateUrl($table, $string, $number, $oldString);
            return $string;
        }

        return $string;
    }

    public static function updateStatus($data)
    {

        $model = $data['model'];
        $id = $data['id'];
        $status = $data['status'];
        $qry = $model->where('id', $id)->update(['status' => $status]);
    } 

    public static function showNav($data)
    {
        $request_url = app('request')->url();
        if (in_array($request_url, $data)) {
            return "show";
        }
    }

    public static function navActive($url)
    {
        $request_url = app('request')->url();
        if ($request_url == $url) {
            return "active";
        }
    }
        
    public static function getWebsiteConfig($method = null){
        $settingObj = new Setting();
        $config = [];
        
        if($method == null || ($method != null && $method == 'email')){
            $email = $settingObj->where('key', 'email')->first();
            if($email && $email->value){
                $config['email'] = $email->value;
            }else{
                $config['email'] = config('constants.CONTACT.email');
            }
        }

        if($method == null || ($method != null && ($method == 'country_code' || $method == 'phone' || $method == 'whatsapp'))){
            $countryCode = $settingObj->where('key', 'country_code')->first();
            if($countryCode && $countryCode->value){
                $config['country_code'] = $countryCode->value;
            }else{
                $config['country_code'] = config('constants.CONTACT.country_code');
            }
        }

        if($method == null || ($method != null && $method == 'phone')){
            $phone = $settingObj->where('key', 'phone')->first();
            if($phone && $phone->value){
                $config['phone'] = '+'.$config['country_code'].'-'.$phone->value;
            }else{
                $phones = Self::makePhonesText($config['country_code'], config('constants.CONTACT.phone'));
                $config['phone'] = $phones;
            }
        }

        if($method == null || ($method != null && $method == 'whatsapp')){
            $whatsapp = $settingObj->where('key', 'whatsapp')->first();
            if($whatsapp && $whatsapp->value){
                $config['whatsapp'] = 'https://wa.me/'.$config['country_code'].$whatsapp->value;
            }else{
                $config['whatsapp'] = config('constants.CONTACT.whatsapp');
            }
        }

        if($method == null || ($method != null && $method == 'whatsapp_number')){
            $whatsapp = $settingObj->where('key', 'whatsapp')->first();
            if($whatsapp && $whatsapp->value){
                $config['whatsapp_number'] = '+'.$config['country_code'].$whatsapp->value;
            }else{
                $config['whatsapp_number'] = config('constants.CONTACT.whatsapp_number');
            }
        }

        if($method == null || ($method != null && $method == 'address')){
            $address = $settingObj->where('key', 'address')->first();
            if($address && $address->value){
                $config['address'] = $address->value;
            }else{
                $config['address'] = config('constants.CONTACT.addresss');
            }
        }

        if($method == null || ($method != null && $method == 'map_link')){
            $mapLink = $settingObj->where('key', 'map_link')->first();
            if($mapLink && $mapLink->value){
                $config['map_link'] = $mapLink->value;
            }else{
                $config['map_link'] = config('constants.ADDRESS.map_link');
            }
        }

          

        if($method == null || ($method != null && $method == 'social')){
            $facebook = $settingObj->where('key', 'facebook_social')->first();
            if($facebook && $facebook->value && $facebook->value != '#'){
                $config['social']['facebook'] = $facebook->value;
            }else{
                $config['social']['facebook'] = config('constants.SOCIAL.facebook');
            }
        }

        if($method == null || ($method != null && $method == 'social')){
            $linkedin = $settingObj->where('key', 'linkedin_social')->first();
            if($linkedin && $linkedin->value && $linkedin->value != '#'){
                $config['social']['linkedin'] = $linkedin->value;
            }else{
                $config['social']['linkedin'] = config('constants.SOCIAL.linkedin');
            }
        }

        if($method == null || ($method != null && $method == 'social')){
            $instagram = $settingObj->where('key', 'instagram_social')->first();
            if($instagram && $instagram->value && $instagram->value != '#'){
                $config['social']['instagram'] = $instagram->value;
            }else{
                $config['social']['instagram'] = config('constants.SOCIAL.instagram');
            }
        }

        if($method == null || ($method != null && $method == 'social')){
            $twitter = $settingObj->where('key', 'twitter_social')->first();
            if($twitter && $twitter->value && $twitter->value != '#'){
                $config['social']['twitter'] = $twitter->value;
            }else{
                $config['social']['twitter'] = config('constants.SOCIAL.twitter');
            }
        }

        if($method == null || ($method != null && $method == 'social')){
            $pinterest = $settingObj->where('key', 'pinterest_social')->first();
            if($pinterest && $pinterest->value && $pinterest->value != '#'){
                $config['social']['pinterest'] = $pinterest->value;
            }else{
                $config['social']['pinterest'] = config('constants.SOCIAL.pinterest');
            }
        }

        if($method == null || ($method != null && $method == 'social')){
            $youtube = $settingObj->where('key', 'youtube_social')->first();
            if($youtube && $youtube->value && $youtube->value != '#'){
                $config['social']['youtube'] = $youtube->value;
            }else{
                $config['social']['youtube'] = config('constants.SOCIAL.youtube');
            }
        }

        if($method == null || ($method != null && $method == 'currency_sign')){
            $currencySign = $settingObj->where('key', 'currency_sign')->first();
            if($currencySign && $currencySign->value){
                $config['currency_sign'] = $currencySign->value;
            }else{
                $config['currency_sign'] = config('constants.CONFIG.currency_sign');
            }
        }
        return $config;

    }

    public static function makePhonesText($countryCode, $phones){
        $phoneText = '';
        if(is_string($phones)){
            return $phoneText = '+'.$countryCode.'-'.$phones;
        } else{
            foreach($phones as $phone){
                $phoneText .= '+'.$countryCode.'-'.$phone.', ';
            }
            $phoneText = rtrim($phoneText, ', ');
            return $phoneText;
        }
        
    }

    public static function saveMetaDetails($data)
    {
        $meta = [
            'related_id' => $data['related_id'],
            'related_type' => $data['related_type'],
            'title' => $data['meta_title'] ?? '',
            'description' => $data['meta_description'] ?? '',
            'keywords' => $data['meta_keywords'] ?? '',
        ];

        $meta_details = MetaDetails::where('related_id', $data['related_id'])
            ->where('related_type', $data['related_type'])->first();

        if (!$meta_details) {
            $meta_details = new MetaDetails();
            $meta_details->related_id = $data['related_id'];
            $meta_details->related_type = $data['related_type'];
        }
        $meta_details->title = $data['meta_title'];
        $meta_details->description = $data['meta_description'];
        $meta_details->keywords = $data['meta_keywords'];
        $meta_details->url = $data['url'];

        $meta_details->save();

        return ['success' => 'Meta Details Saved!'];
    }

    public static function getMetaDeails($data)
    {
        $url = $data['url'];
        $meta_details = MetaDetails::where('url', $url)->first();

        if (!$meta_details) {
            return ['error' => 1, 'msg' => 'Meta Details Not Found!'];
        }

        return ['error' => 0, 'msg' => '', 'meta_details' => $meta_details];
    }

    public static function getUrlByPage($data)
    {
        $page_id = $data['page_id'];
        $page = array_flip(config('constants.STATIC_PAGES'))[$page_id];

        switch ($page) {
            case 'Home':
                $parsedUrl = parse_url(route('front.home'));
                return  $parsedUrl['path'] ?? "/";
            case 'About Us':
                $parsedUrl = parse_url(route('front.about'));
                return  $parsedUrl['path'];
            case 'Service support':
                $parsedUrl = parse_url(route('front.service.support'));
                return  $parsedUrl['path'];
            case 'Contact Us':
                $parsedUrl = parse_url(route('front.contact'));
                return  $parsedUrl['path'];
            case 'Career':
                $parsedUrl = parse_url(route('front.career'));
                return  $parsedUrl['path'];
            case 'Privacy Policy':
                $parsedUrl = parse_url(route('privacy.policy'));
                return  $parsedUrl['path'];
            case 'Terms & Conditions':
                $parsedUrl = parse_url(route('terms.and.conditions'));
                return  $parsedUrl['path'];
            case 'FAQ':
                $parsedUrl = parse_url(route('faq'));
                return  $parsedUrl['path'];
            case 'Gallery':
                $parsedUrl = parse_url(route('front.gallery'));
                return  $parsedUrl['path'];
            default:
                return null;
        }
    }

     

    public static function getImage($folder=null, $image=null) {
        $noImagePath = url('images/default/no-image.png');
        if (file_exists(public_path($folder.'/'.$image)) && !is_null($image)) {
            return url($folder.'/'.$image);
        } else {
            return $noImagePath;
        }
    }

    public static function getProfileImage($folder=null, $image=null) {
        $noImagePath = url('images/default/profile.png');
        if (file_exists(public_path($folder.'/'.$image)) && !is_null($image)) {
            return url($folder.'/'.$image);
        } else {
            return $noImagePath;
        }
    }

   
    public static function getLogo($light=false) {
        if($light){
            return url('images/logo/logo-light.png');
        }
        return url('images/logo/logo-main.png');
    }

    public static function divider($number_of_digits) {
        $tens="1";
    
      if($number_of_digits>8)
        return 10000000;
    
      while(($number_of_digits-1)>0)
      {
        $tens.="0";
        $number_of_digits--;
      }
      return $tens;
    }

    public static function priceFormat($num){       
        
        $ext="";//thousand,lac, crore
        $number_of_digits = strlen($num); 
        if($number_of_digits>3) {
            if($number_of_digits%2!=0)
                $divider = self::divider($number_of_digits-1);
            else
                $divider = self::divider($number_of_digits);
                
        } else{            
            $divider=1;
        }
        $fraction=$num/$divider;
        $fraction=number_format($fraction,2);
        if($number_of_digits==4 ||$number_of_digits==5)
            $ext="k";
        if($number_of_digits==6 ||$number_of_digits==7)
            $ext="Lac";
        if($number_of_digits==8 ||$number_of_digits==9)
            $ext="Cr";
        
          
        $priceData =  $fraction." ".$ext;
            
        return $priceData;
    }

    public static function pages() {
        $rows = Page::where('status', 1)->latest()->get();
        return $rows;
    }    

    public static function propertyid($number) {
        $formattedNumber = str_pad($number, 4, '0', STR_PAD_LEFT);
        return $formattedNumber; 
    }    
 
}