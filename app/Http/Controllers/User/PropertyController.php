<?php

namespace App\Http\Controllers\User;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\PropertyImage;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PropertyController extends Controller
{
    private $prefix = 'user';
    protected $userAuth;
    private $pagerecords;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->userAuth = Auth::guard('user')->user();
            return $next($request);
        });
    }
 
    public function list(Request $request){
        $properties = Property::paginate($this->pagerecords);
        $data=array('rows'=>$properties);
        return view($this->prefix.'.property.list')->with($data);
    }

    public function add(){
        return view($this->prefix.'.property.form');
    }

    public function edit(Request $request, $id){
        $property = Property::where('id',$id)->first();
        if( !$property ){  
            Helper::toastMsg(false, "Property not found.");
            return back();  
        }  
        return view($this->prefix.'.property.form',['row' => $property]);
    }
    
    public function postData(Request $request){       
        $validationArray = [
            'title' => 'required',
            'location' => 'required',
            'state' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'availability' => 'required',
            'ownership' => 'required',
            'build_year' => 'required',
            'price' => 'required',
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
        ];
        
        $this->validate($request, $validationArray);
        $amenities = '';
        $additional = '';
        if(isset($request->amenities)){
            $amenities = implode(',',$request->amenities);
        }    

        if(isset($request->additional)){
            $additional = implode(',',$request->additional);
        } 
        
        DB::beginTransaction(); 
        $id = trim($request->input('id'));  
        $user = $this->userAuth; 
        if (empty($id)) {
            $property = new Property();
            $property->user_id = $user->id; 
        } else {
            $property = $user->Property->find($id);
            if (!$property) {
                Helper::toastMsg(false, "Property not found.");
                return back();  
            }
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
        $property->price_detail = $request->price_detail;
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
        $property->status = 2;
        $property->save();
        
        // Handle image uploads
        if ($images = $request->file('images')) {
            foreach($images as $image){
                Helper::uploadImage($image, $property->images(), 'property/' . $property->id, false, 'update', 'image', false, false, true, false);
            }
        }            

        DB::commit();
        Helper::toastMsg(true, 'Property Added/Updated successfully!');
        return redirect()->route('user.properties');
        
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

    public function changeStatusSold(Request $request) {
        $property = Property::find($request->id);
        $property->status = 3;
        $property->save();
        Helper::toastMsg(true, 'Successfully!');
        return redirect()->route('user.properties');
    }

    public function enquery(){
        $user = $this->userAuth;
        return view('user.enquery-properties', compact('user'));
    }
}
