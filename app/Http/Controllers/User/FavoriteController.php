<?php

namespace App\Http\Controllers\User;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\Favorite;
use App\Models\Property;
use App\Models\PropertyImage;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class FavoriteController extends Controller
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

    public function add(Request $request){
        $user = $this->userAuth; 
        $id = trim($request->id); 
        if (empty($id)) {
            Helper::toastMsg(false, "Property not found.");
            return back();  
        } 
        $property = Property::find($id);
        if (!$property) {
            Helper::toastMsg(false, "Property not found.");
            return back();  
        } 
        $favorite = new Favorite();
        $favorite->user_id = $user->id; 
        $favorite->property_id = $id;
        $favorite->status = 1;
        $favorite->save();
        return view($this->prefix.'.property.form');
    }
}
