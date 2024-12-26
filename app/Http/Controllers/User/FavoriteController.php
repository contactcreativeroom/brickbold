<?php

namespace App\Http\Controllers\User;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\Favorite;
use App\Models\Property;
use App\Models\PropertyImage;
use App\Models\User;
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
        $user = $this->userAuth; 
        $favorites = $user->favorites()->paginate($this->pagerecords);
        $data=array('rows'=>$favorites);
        return view($this->prefix.'.property.favorites')->with($data);
    }

    public function add(Request $request){
        $user = $this->userAuth; 
        $id = trim($request->id); 
        if (empty($id)) {
            Helper::toastMsg(false, "Some error occured!");
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
        return back(); 
    }

    public function toggle(Request $request){         
        $userAuth = $this->userAuth; 
        $id = trim($request->id); 
        if (empty($id)) {
            Helper::toastMsg(false, "Some error occured!");
            return back();  
        } 
        $property = Property::find($id);
        if (!$property) {
            Helper::toastMsg(false, "Property not found.");
            return back();  
        }  

        if(!$userAuth){
            Helper::toastMsg(false, 'Error: Forbidden 403');
            return back(); 
        } 
        $user = User::find($userAuth->id);
        $favorite = $user->favorites()->where('property_id', $id)->first();

        if ($favorite) { 
            $favorite->delete();
            Helper::toastMsg(true, 'Removed successfully.');
            return back(); 
        } else {
            $property = Property::find($id);
            if(!$property){ 
                Helper::toastMsg(false, 'Error: Property not found');
                return back(); 
            }
            $user->favorites()->create([
                'property_id'=>$id,
                'status'=>1,
            ]); 
            Helper::toastMsg(true, 'Added successfully.');
            return back();
        }        
    }

    public function delete(Request $request){
        $user = $this->userAuth; 
        $favorite = $user->favorites->find($request->favorite_id);
        if (!$favorite) {
            Helper::toastMsg(false, "Some error occured!");
            return back();  
        }
        $favorite->delete();
        Helper::toastMsg(true, "Successfully!");
        return back();
    } 
}
