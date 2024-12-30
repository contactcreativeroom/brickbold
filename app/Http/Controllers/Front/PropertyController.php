<?php

namespace App\Http\Controllers\Front;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    private $prefix = 'front';
    protected $userAuth;
    private $pagerecords;

    public function __construct()
    {
        //
    }

    public function properties(Request $request) {
        $properties = Property::query();
        
        if ($request->has('availability')) {
            $availability = $request->availability; 
            $properties->where('availability', $availability) ;
        } 

        if ($request->filled('for_type')) {
            $for_type = $request->for_type; 
            $properties->where('for_type', $for_type) ;
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
            'search' => $request->get('search'),
            'property_detail' => $request->get('property_detail'),
            'type' => $request->get('type'),
            'bedroom' => $request->get('bedroom'),
            'bathroom' => $request->get('bathroom'),
            'min_price' => $request->get('min_price'),
            'max_price' => $request->get('max_price'),
            'sort' => $request->get('sort'),
        ]); 

        // $properties = Property::orderBy('id', 'desc')->paginate($this->pagerecords);
        $featured = Property::orderBy('is_luxury', 'desc')->orderBy('id', 'desc')->limit(5)->get();
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
        $similarProperties = Property::where('id', '!=', $property->id)->where('type', $property->type)->where('for_type', $property->for_type)->latest()->limit(3)->get();
        return view($this->prefix.'.property.detail',['row' => $property, 'similarProperties' => $similarProperties]);
    }
}
