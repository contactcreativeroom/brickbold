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
        return view('front.properties');
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
