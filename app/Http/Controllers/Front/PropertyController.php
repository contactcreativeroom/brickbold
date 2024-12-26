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
        if ($request->has('property_detail')) {
            $property_detail = $request->property_detail; 
            $properties->whereIn('property_detail', $property_detail) ;
        }

        if ($request->has('price')) {
            $prices = $request->price; 
            $properties->whereBetween('price', [0, $prices]) ;
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
        }

        $properties = $properties->paginate($this->pagerecords)->appends([
            'property_detail' => $request->get('property_detail'),
            'price' => $request->get('price'),
            'search' => $request->get('search'),
            'short' => $request->get('short'),
        ]); 

        // $properties = Property::orderBy('id', 'desc')->paginate($this->pagerecords);
        $featured = Property::orderBy('id', 'desc')->limit(5)->get();
        return view('front.properties',['rows' => $properties, 'featured' => $featured]);
    }

    public function property(Request $request) {
        $property = Property::find($request->id);
        if( !$property ){  
            Helper::toastMsg(false, "Property not found.");
            return back();  
        } 

        $similarProperties = Property::where('type', $property->type)->where('for_type', $property->for_type)->latest()->limit(3)->get();
        return view($this->prefix.'.property.detail',['row' => $property, 'similarProperties' => $similarProperties]);
    }
}
