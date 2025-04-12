<?php

namespace App\Http\Controllers\Front;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\PropertyEnquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PropertyController extends Controller
{
    private $prefix = 'front';
    protected $userAuth;
    private $pagerecords;

    public function __construct()
    {
        $this->pagerecords = config('constants.FRONT_PAGE_RECORDS');
    }

    public function properties(Request $request) {
        $properties = Property::whereIn('status', [1,3]);
        
        if ($request->filled('availability')) {
            $availability = $request->availability; 
            $properties->where('availability', $availability) ;
        } 

        if ($request->filled('for_type')) {
            $for_type = $request->for_type; 
            $properties->where('for_type', $for_type) ;
        }

        if ($request->filled('is_verified')) {
            $is_verified = $request->is_verified; 
            $properties->where('is_verified', $is_verified) ;
        }
        if ($request->filled('is_premium')) {
            $is_premium = $request->is_premium; 
            $properties->where('is_premium', $is_premium) ;
        }

        if ($request->filled('furnished')) {
            $furnished = $request->furnished; 
            $properties->where('furnished', $furnished) ;
        }

        // if ($request->has('key') && $request->key !='') {
        //     $key = $request->input('key');
        //     $properties->where('title', 'like', '%' . $key . '%');
        // }

        if ($request->filled('search')) {
            $search = $request->input('search');
            $properties->where(function ($query) use ($search) {
                $query->where('location', 'like', "%{$search}%")
                      ->orWhere('state', 'like', "%{$search}%")
                      ->orWhere('city', 'like', "%{$search}%")
                      ->orWhere('zip_code', 'like', "%{$search}%");
            });
        }
        
        if ($request->filled('property_detail')) {
            $property_detail = $request->property_detail; 
            $properties->where('property_detail', $property_detail) ;
        }

        if ($request->filled('type')) {
            $type = $request->type; 
            $properties->where('type', $type) ;
        }

        if ($request->filled('bedroom')) {
            $bedroom = $request->bedroom; 
            $properties->where('bedroom', $bedroom) ;
        }

        if ($request->filled('bathroom')) {
            $bathroom = $request->bathroom; 
            $properties->where('bathroom', $bathroom) ;
        }

        if ($request->filled('min_price') && $request->min_price > 0   && $request->min_price != 'false' ) {
            $minPrice = $request->min_price; 
            $properties->where('price', '>=', $minPrice);
        } 

        if ($request->filled('max_price') && $request->max_price > 0    && $request->max_price != 'false') {
            $maxPrice = $request->max_price; 
            $properties->where('price', '<=', $maxPrice);
        }

        // if ($request->filled('min_size') && $request->min_size > 0    && $request->min_size != 'false') {
        //     $minSize = $request->min_size; 
        //     $properties->where('plot_area', '>=', $minSize);
        // }

        // if ($request->filled('max_size') && $request->max_size > 0    && $request->max_size != 'false') {
        //     $maxSize = $request->max_size; 
        //     $properties->where('plot_area', '<=', $maxSize);
        // }

        if ($request->filled('sort')) {
            $sort = $request->sort;
            if ($sort === 'asc') {
                $properties->orderBy('id', 'asc');
            } else { 
                $properties->orderBy('id', 'desc');
            }
        } else { 
            $properties->orderBy('id', 'desc');
        }

        $properties = $properties->paginate($this->pagerecords)->appends([
            'availability' => $request->get('availability'),
            'for_type' => $request->get('for_type'),
            'is_verified' => $request->get('is_verified'),
            'is_premium' => $request->get('is_premium'),
            'furnished' => $request->get('furnished'),
            'search' => $request->get('search'),
            'property_detail' => $request->get('property_detail'),
            'type' => $request->get('type'),
            'bedroom' => $request->get('bedroom'),
            'bathroom' => $request->get('bathroom'),
            'min_price' => $request->get('min_price'),
            'max_price' => $request->get('max_price'),
            'sort' => $request->get('sort'),
        ]); 

        // $properties = Property::whereIn('status', [1,3])->orderBy('id', 'desc')->paginate($this->pagerecords);
        $featured = Property::whereIn('status', [1,3])->orderBy('is_luxury', 'desc')->orderBy('id', 'desc')->limit(5)->get();
        return view($this->prefix.'.property.properties',['rows' => $properties, 'featured' => $featured]);
    }

    public function property(Request $request) { 
        $property = Property::where('slug', $request->slug)->first();
        if( !$property ){  
            Helper::toastMsg(false, "Property not found.");
            return back();  
        } 
        $property->views = ($property->views +1 ) ;
        $property->save();
        $similarProperties = Property::whereIn('status', [1,3])->where('id', '!=', $property->id)->where('type', $property->type)->where('for_type', $property->for_type)->latest()->limit(3)->get();
        return view($this->prefix.'.property.detail',['row' => $property, 'similarProperties' => $similarProperties]);
    }

    public function enquiryPost(Request $request) { 
        // $validationArray = [
        //     'name' => ['required', 'regex:/^[A-Za-z\s]+$/', 'min:3', 'max:30'],
        //     'email' => 'required|email',
        //     'phone' => ['required', 'regex:/^[6-9]\d{9}$/'],
        // ];
        
        // $this->validate($request, $validationArray); 
        $property = Property::find($request->property_id);
        if(!$property){
            Helper::toastMsg(false, "Opps! Some error in Property detail.");
            return back()->withInput();
        }
        $user = Auth::guard('user')->user();
        $isEligibleToShowInterest = Helper::isEligibleToShowInterest();
        if(!$isEligibleToShowInterest){
            return response()->json([
                'error' => true,
                'message' => 'Buy a buyer package to get the Owner details',
            ], 422);
        }
        $propertyEnquiry = $property->enquiry()->create([
            'user_id' => $property->user_id,
            'interested_user_id' => $user->id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'status' => 1,
        ]); 
        
        if($propertyEnquiry){
            
            

            if (isset($property->user->phone) && $property->user->phone != ""){
                $mobile = $property->user->phone;
                if (isset($property->for_type) && $property->for_type == "for-sell"){
                    $templateId = config('constants.MOBILE_SMS.TEMPLATED_ID_PROPERTY_INTEREST_BUY');
                    $message = "Hi, ".$user?->name." ".$user?->phone." expressed interest in your property on Brickbold.";
                } else if (isset($property->for_type) && $property->for_type == "for-rent"){
                    $templateId = config('constants.MOBILE_SMS.TEMPLATED_ID_PROPERTY_INTEREST_RENT');
                    $message = "Hi, ".$user?->name." ".$user?->phone." expressed interest in renting your accommodation on Brickbold.";
                }
                Helper::sentSMS($mobile, $message, $templateId);
            }
            if (isset($property->user->email) && $property->user->email != ""){
                $details = array(
                    'logo' => Helper::getLogo(),
                    'name'=> $property?->user?->name,
                    'email'=>$property?->user?->email,
                    'property_name'=>$property->title,
                    'property_url'=> route('property', $property->slug),
                );
                dispatch(new \App\Jobs\PropertyEnquiryQueue($details));
            }

        } else{
            Helper::toastMsg(false, "Opps! Some error occured.");
            return back()->withInput();
        } 
        return response()->json(['success_end' => true, 'message' => 'Thank you for reaching out! Your enquiry has been successfully submitted. One of our real estate experts will get in touch with you soon.']);

        // Helper::toastMsg(true, 'Thank you for reaching out! Your enquiry has been successfully submitted. One of our real estate experts will get in touch with you soon.');
        // return back();
    }
}
