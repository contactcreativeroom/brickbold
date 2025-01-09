<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\PropertyImage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PropertyController extends Controller
{
    public $successStatus=200;
    private $prefix = 'admin';
    private $pagerecords;

    public function __construct(){
    	$this->middleware('admin');
        $this->pagerecords = config('constants.ADMIN_PAGE_RECORDS');
    }

    public function list(Request $request){ 
        $properties = Property::query();
        if ($request->has('type') && $request->type != "") {
            $type = $request->type; 
            $properties->where('type', $type) ;
        } 
        if ($request->has('property_detail') && $request->property_detail != "") {
            $property_detail = $request->property_detail; 
            $properties->where('property_detail', $property_detail) ;
        } 
        if ($request->has('for_type') && $request->for_type != "") {
            $for_type = $request->for_type; 
            $properties->where('for_type', $for_type) ;
        } 
        if ($request->has('status') && $request->status != "") {
            $status = $request->status; 
            $properties->where('status', $status) ;
        } 
        $properties->latest() ;
        $properties = $properties->paginate($this->pagerecords)->appends([
            'type' => $request->get('type'),
            'property_detail' => $request->get('property_detail'),
            'for_type' => $request->get('for_type'),
            'status' => $request->get('status'),
        ]);
        $data=array('rows'=>$properties);
        return view($this->prefix.'.property.list')->with($data);
    } 

    public function add(Request $request, $user_id = 0){
        return view($this->prefix . '.property.form', compact('user_id'));
    }

    public function edit(Request $request, $id) {
        $property = Property::find($id);
        $data = array('row' => $property);
        return view($this->prefix.'.property.form')->with($data);
    }

    public function postData(Request $request){       
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'location' => 'required',
            'state' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'availability' => 'required',
            'ownership' => 'required',
            'build_year' => 'required',
            'price' => 'required|numeric',
            'token_amount' => 'nullable|numeric|lt:price',
            'is_negotiable' => 'required',
            'type' => 'required',
            'property_detail' => 'required',
            'for_type' => 'required',
            'plot_area' => 'required',
            'carpet_area' => 'required',
            'builtup_area' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'facing' => 'required',
            'furnished' => 'required',
        ]);
         
        if ($validator->fails()) {
            Helper::toastMsg(false, "Validation errors: " . json_encode($validator->errors()->toArray()));
            return back()->withErrors($validator)->withInput();
        }

        //return $request->token_amount;
        if(isset($request->token_amount) && $request->token_amount > 0){
            if($request->token_amount > $request->price){
                Helper::toastMsg(false, "Token price should be less then price.");
                return back()->withInput();
            }
        }
 
        $amenities = '';
        $additional = '';
        if(isset($request->amenities)){
            $amenities = implode(',',$request->amenities);
        }    

        if(isset($request->additional)){
            $additional = implode(',',$request->additional);
        } 
        
        DB::beginTransaction(); 
        $admin = Auth::guard('admin')->user();
        $metaValue = "Added new property by ".$admin->name." with status ".config('constants.PROPERTY_STATUSES')[$request->status];
        $id = trim($request->input('id'));
        if (empty($id)) {
            $property = new Property();
            if(isset($request->user_id)){
                $property->user_id = $request->user_id; 
            }
        } else {
            $metaValue = "Updated property to ".config('constants.PROPERTY_STATUSES')[$request->status]." by ".$admin->name;
            $property = Property::find($id);
            if (!$property) {
                Helper::toastMsg(false, "Property not found.");
                return back();  
            }
        }  
        if($request->status == 3){
            $property->sold_date = Carbon::now()->format('Y-m-d');
        } else{
            $property->sold_date = null;
        }
        $property->title = $request->title;
        $property->description = $request->description;
        $property->location = $request->location;
        $property->state = $request->state;
        $property->city = $request->city;
        $property->zip_code = $request->zip_code;
        $property->latitude = $request->latitude;
        $property->longitude = $request->longitude;
        $property->availability = $request->availability;
        $property->ownership = $request->ownership;
        $property->build_year = $request->build_year;
        $property->price = $request->price;
        $property->is_negotiable = $request->is_negotiable;
        $property->token_amount = $request->token_amount;
        $property->type = $request->type;
        $property->property_detail = $request->property_detail;
        $property->for_type = $request->for_type;
        $property->plot_area = $request->plot_area;
        $property->plot_type = $request->plot_type;
        $property->carpet_area = $request->carpet_area;
        $property->builtup_area = $request->builtup_area;
        $property->floors = $request->floors;
        $property->bedroom = $request->bedroom;
        $property->bathroom = $request->bathroom;
        $property->balcony = $request->balcony;
        $property->facing = $request->facing;
        $property->furnished = $request->furnished;
        $property->approved_by = $request->approved_by;
        $property->additional = $additional;
        $property->amenities = $amenities;
        $property->video_link = $request->video_link;
        $property->status = $request->status;
        $property->save();
        
        // Handle image uploads
        if ($images = $request->file('images')) {
            foreach($images as $image){
                Helper::uploadImage($image, $property->images(), 'property/' . $property->id, false, 'update', 'image', false, false, true, false);
            }
        }            

        $property->history()->create([ 
            'user_id' => $property->user_id,
            'admin_id' => $admin?->id,
            'current_status' => $request->status, 
            'meta_key' => 'admin', 
            'meta_values' => $metaValue, 
            'status' => 1,
        ]);

        DB::commit();
        Helper::toastMsg(true, 'Property Added/Updated successfully!');
        return redirect()->route('admin.properties');
        
    }


    public function deleteImage(Request $request){
        $propertyImage = PropertyImage::find($request->image_id);
        $imagePath = 'property/' . $propertyImage->property_id . '/' . $propertyImage->image;
        if (Storage::exists('public/' . $imagePath)) {
            Storage::delete('public/' . $imagePath);
        }
        $propertyImage->delete();
        return response()->json(['status' => 'success',]);
    }  

    public function changeStatus(Request $request)
    {
        $admin = Auth::guard('admin')->user();
        $property = Property::find($request->entity_id);
        if($property){
            $property->status = $request->status;
            $property->sold_date = null;
            $property->save();
            $property->history()->create([ 
                'user_id' => $property?->user_id,
                'admin_id' => $admin?->id,
                'current_status' => $request->status, 
                'meta_key' => 'admin', 
                'meta_values' => "Updated to ".config('constants.PROPERTY_STATUSES')[$request->status]. " By ". $admin?->name, 
                'status' => 1,
            ]); 
            return response()->json(['status' => 'success', 'message' => 'Status updated successfully']);
        }
        return response()->json(['status' => false, 'message' => 'Property not found']);
    }
}
