<?php

namespace App\Http\Controllers\User;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\PropertyImage;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
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
        $this->pagerecords = config('constants.FRONT_PAGE_RECORDS');
        $this->middleware(function ($request, $next) {
            $this->userAuth = Auth::guard('user')->user();
            return $next($request);
        });
    }
 
    public function list(Request $request){
        $user = $this->userAuth; 

        $properties = $user->Properties();
        if ($request->has('status') && $request->status != '') {
            $status = $request->status; 
            $properties->where('status', $status) ;
        } 

        if ($request->has('search') && $request->search !='') {
            $search = $request->get('search');
            //$properties->where('location', 'like', '%' . $search . '%');
            $properties->where(function ($query) use ($search) {
                $query->where('location', 'like', '%' . $search . '%')->orWhere('title', 'like', '%' . $search . '%');
            });
        }

        if ($request->has('short')) { // Sorting
            $sort = $request->short;
            if ($sort === 'asc') {
                $properties->orderBy('id', 'asc');
            } else { 
                $properties->orderBy('id', 'desc');
            }
        } else { 
            $properties->orderBy('id', 'desc');
        }

        $properties = $properties->paginate($this->pagerecords)->appends([
            'status' => $request->get('status'),
            'search' => $request->get('search'),
            'short' => $request->get('short'),
        ]); 
        $activateButton = false;
        if ($user->user_type == "Owner") { 
            $subscriptions = $user->subscriptions()->where('property_id', null)->where('start_date', '<=', now())->where('end_date', '>=', now())->latest()->get();
            if ($subscriptions->count() > 0) {
                $activateButton = true;
            }
        }
        $data=array('rows'=>$properties, 'activateButton'=>$activateButton);
        return view($this->prefix.'.property.list')->with($data);
    }

    public function add(){
        //$userAccess = Helper::userAccess();
        // if (isset($userAccess->start_date, $userAccess->end_date) && now()->between(Carbon::parse($userAccess->start_date), Carbon::parse($userAccess->end_date))) {
        //     return view($this->prefix.'.property.form');
        // } else{
        //     Helper::toastMsg(false, "You do not have any active packages.");
        //     return back(); 
        // }
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
        $validator = Validator::make($request->all(), [
            // 'title' => 'required',
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
        
        if(isset($request->builtup_area) && isset($request->carpet_area) && $request->builtup_area > 0 && $request->carpet_area > 0){
            if($request->carpet_area > $request->builtup_area){
                Helper::toastMsg(false, "Carpet Area should not be more then Builtup Area.");
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
        $id = trim($request->input('id'));  
        $user = $this->userAuth; 
        $metaValue = "Added new property";
        if (empty($id)) {
            $property = new Property();
            $property->user_id = $user->id; 
        } else {
            $metaValue = "Updated property";
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
        $property->status = 2;
        $property->save();
        
        // Handle image uploads
        if ($images = $request->file('images')) {
            foreach($images as $image){
                Helper::uploadImage($image, $property->images(), 'property/' . $property->id, false, 'update', 'image', false, false, true, false);
            }
        }            

        $property->history()->create([ 
            'user_id' => $property->user_id,
            'current_status' => 2, 
            'meta_key' => 'user', 
            'meta_values' => $metaValue, 
            'status' => 1,
        ]); 
        Helper::assignPropertyToPackage($property->id);
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
        $property->sold_date = Carbon::now()->format('Y-m-d');
        $property->save();
        $property->history()->create([ 
            'user_id' => $property->user_id,
            'current_status' => 3, 
            'meta_key' => 'user', 
            'meta_values' => "Updated to sold", 
            'status' => 1,
        ]); 
        Helper::toastMsg(true, 'Successfully!');
        return redirect()->route('user.properties');
    }

    public function assignPackage(Request $request) {
        Helper::assignPropertyToPackage($request->id);
        return back(); 
    }

    public function enquiriesOld(Request $request){ 
        $user = $this->userAuth;
        $userAccess = Helper::userAccess();
        //dd($userAccess);
        $propertyEnquiries = null;
        if (isset($userAccess->start_date, $userAccess->end_date) && now()->between(Carbon::parse($userAccess->start_date), Carbon::parse($userAccess->end_date))) {
            $propertyEnquiries = $user->PropertyEnquiries();
            if(isset($userAccess->properties)){
                //$propertyEnquiries = $propertyEnquiries->whereIn('property_id', $userAccess->properties);
            }
            if(isset($userAccess->contacts) && $userAccess->contacts > 0){
                $propertyEnquiries = $propertyEnquiries->limit($userAccess->contacts);
            }
            $propertyEnquiries = $propertyEnquiries->paginate($this->pagerecords);
        } else{
            $propertyEnquiries = new LengthAwarePaginator([], 0, $this->pagerecords);
        }
        $data=array('rows'=>$propertyEnquiries);
        return view($this->prefix.'.enquiry-properties')->with($data);
    }

    public function enquiries(Request $request) {
        $user = $this->userAuth;
        $userAccess = Helper::userAccess();   
        //dd($userAccess);
        $propertiesData = collect();    
        if (isset($userAccess->start_date, $userAccess->end_date) && now()->between(Carbon::parse($userAccess->start_date), Carbon::parse($userAccess->end_date))) {
            $filteredEnquiries = $user->PropertyEnquiries()->get();
            $propertiesData = $propertiesData->merge($filteredEnquiries);
        } else{
            if (!empty($userAccess['subscriptions'])) {
                foreach ($userAccess['subscriptions'] as $subscription) {
                    if (isset($subscription->start_date, $subscription->end_date) && now()->between(Carbon::parse($subscription->start_date), Carbon::parse($subscription->end_date))) {
                        $filteredEnquiries = $user->PropertyEnquiries()
                            ->where('property_id', $subscription->property_id)
                            ->limit($subscription->contacts)
                            ->get();
            
                        $propertiesData = $propertiesData->merge($filteredEnquiries);
                    }
                }
            }  
        }      
        $propertiesData = $propertiesData->sortByDesc('id');
        $propertyEnquiries = new LengthAwarePaginator(
            $propertiesData->forPage(Paginator::resolveCurrentPage(), $this->pagerecords),
            $propertiesData->count(),
            $this->pagerecords,
            Paginator::resolveCurrentPage(),
            ['path' => $request->url()]  
        );

        return view($this->prefix . '.enquiry-properties', [
            'rows' => $propertyEnquiries
        ]);
    }

    
}
