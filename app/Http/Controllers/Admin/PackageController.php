<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PackageController extends Controller
{
    public $successStatus=200;
    private $prefix = 'admin';
    private $pagerecords;

    public function __construct(){
    	$this->middleware('admin');
        $this->pagerecords = config('constants.ADMIN_PAGE_RECORDS');
    }

    public function list(Request $request){
        $packages = Package::query();
        if ($request->has('type') && $request->type != "") {
            $type = $request->type; 
            $packages->where('type', $type) ;
        } 
        if ($request->has('profile') && $request->profile != "") {
            $profile = $request->profile; 
            $packages->where('profile', $profile) ;
        } 
        if ($request->has('status') && $request->status > 0) {
            $status = $request->status; 
            $packages->where('status', $status) ;
        } 
        $packages->latest() ;
        $packages = $packages->paginate($this->pagerecords)->appends([
            'type' => $request->get('type'),
            'profile' => $request->get('profile'),
            'status' => $request->get('status'),
        ]);

        $data=array('rows'=>$packages);
        return view($this->prefix.'.package.list')->with($data);
    } 

    public function add(Request $request, $user_id = 0){
        return view($this->prefix . '.package.form', compact('user_id'));
    }

    public function edit(Request $request, $id) {
        $package = Package::find($id);
        if (!$package) {
            Helper::toastMsg(false, "package not found.");
            return back();  
        }
        $data = array('row' => $package);
        return view($this->prefix.'.package.form')->with($data);
    }

    public function postData(Request $request){           
        $this->validate($request, [
            'type' => 'required',
            'profile' => 'required',
            'property_type' => 'required',
            'name' => 'required',
            'days' => 'required',
            'price' => 'required',
            'unit' => 'required',
            'post_property' => 'required',
        ]); 

        $fields = $request->fields;
        if (!isset($fields) || !is_array($fields) || empty(array_filter($fields, function ($field) {
            return !empty($field['heading']) || !empty($field['value']);
        }))) {
            Helper::toastMsg(false, "At least one field is required.");
            return redirect()->back()->withErrors(['fields' => 'At least one field is required.'])->withInput();
        }
        DB::beginTransaction(); 
        $id = trim($request->input('id'));
        if (empty($id)) {
            $package = new package();
        } else {
            $package = Package::find($id);
            if (!$package) {
                Helper::toastMsg(false, "package not found.");
                return back();  
            }
        }  
        $package->type = $request->type;
        $package->profile = $request->profile;
        $package->property_type = $request->property_type;
        $package->name = $request->name;
        $package->days = $request->days;
        $package->price = $request->price;
        $package->unit = $request->unit;  
        $package->post_property = $request->post_property;
        $package->discount = $request->discount;
        $package->grand_price = ($request->price - ($request->price * $request->discount)/100);
        $package->status = isset($request->status)? $request->status : 1;
        $package->save();
        
        
        if(isset($fields) && is_array($fields) && count($fields) > 0){
            $package->field()->delete();
            foreach($fields as $key => $value){
                if($value['heading'] !='' && $value['value'] !='' ){
                    $package->field()->create([
                        'heading' => isset($value['heading']) ? $value['heading'] : '', 
                        'value' => isset($value['value']) ? $value['value'] : '',
                        'status' => 1
                    ]);
                }                
            }
        }       

        DB::commit();
        Helper::toastMsg(true, 'Package Added/Updated successfully!');
        return redirect()->route('admin.packages');
        
    }


    public function delete(Request $request){
        $package = Package::find($request->id);
        $package->delete();
        Helper::toastMsg(true, 'Package deleted successfully!');
        return redirect()->back();
    }  

    public function changeStatus(Request $request)
    {
        $package = Package::find($request->entity_id);
        if($package){
            $package->status = $request->status;
            $package->save();
            return response()->json(['status' => 'success', 'message' => 'Status updated successfully']);
        }
        return response()->json(['status' => false, 'message' => 'package not found']);
    }

    public function orders(Request $request){
        $orders = Order::query();
        if ($request->has('package_name') && $request->package_name != "") {
            $package_name = $request->package_name; 
            $orders->where('package_name', $package_name) ;
        }  
        if ($request->has('status') && $request->status !="") {
            $status = $request->status; 
            $orders->where('status', $status) ;
        } 
        $orders->latest() ;
        $orders = $orders->paginate($this->pagerecords)->appends([
            'package_name' => $request->get('package_name'), 
            'status' => $request->get('status'),
        ]);
        $packages = Order::select('package_name')->distinct()->get();
        $data=array('rows'=>$orders, 'packages' => $packages);
        return view($this->prefix.'.package.orders')->with($data);
    } 

    
}
