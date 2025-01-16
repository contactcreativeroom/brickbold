<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public $successStatus=200;
    private $prefix = 'admin';
    private $pagerecords;

    public function __construct(){
    	$this->middleware('admin');
        $this->pagerecords = config('constants.ADMIN_PAGE_RECORDS');
    }

    public function list(Request $request){
        $users = User::query();
        if ($request->has('user_type') && $request->user_type != "") {
            $user_type = $request->user_type; 
            $users->where('user_type', $user_type);
        } 
        if ($request->has('package') && $request->package != "") {
            $package = $request->package; 
            //$users->where('package', $package) ;
        }  
        if ($request->has('status') && $request->status != "") {
            $status = $request->status; 
            $users->where('status', $status) ;
        } 
        $users->latest();
        $users = $users->paginate($this->pagerecords)->appends([
            'role' => $request->get('role'),
            'package' => $request->get('package'),
            'status' => $request->get('status'),
        ]);
        $packages = Package::where('status',1)->latest()->get();
        $data=array('rows'=>$users, 'packages'=>$packages);
        return view($this->prefix.'.users.list')->with($data);
    }

    public function detail(Request $request, $id){
        $user = User::find($id);
        $subscriptions = $user->subscriptions()->where('start_date', '<=', now())->where('end_date', '>=', now())->where('status', 1)->latest()->limit(5)->get();
        $properties = $user->Properties()->paginate($this->pagerecords);
        $data=array('user'=>$user, 'rows'=>$properties, 'subscriptions'=>$subscriptions );
        return view($this->prefix.'.users.detail')->with($data);
    }

    public function edit(Request $request, $id) {
        $user = User::find($id);
        $data = array('row' => $user);
        return view($this->prefix.'.users.form')->with($data);
    }

    public function postData(Request $request){
        $id = trim($request->input('id'));
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',  
        ]);
         
        if ($validator->fails()) {
            Helper::toastMsg(false, "Validation errors: " . json_encode($validator->errors()->toArray()));
            return back()->withErrors($validator)->withInput();
        }       

        DB::beginTransaction();        
        if(empty($id)){
            $user = User::create([
                'user_type' => $request->user_type,
                'name' => $request->name,
                'description' => $request->description,
                'email' => $request->email,
                'password' => Hash::make('123456'),
                'phone' => $request->phone,
                'address' => $request->address,
                'business_name' => $request->business_name,
                'landline_number' => $request->landline_number,
                'gstin' => $request->gstin,
                'rera_number' => $request->rera_number,
                'website' => $request->website,
                'status' => 1,
            ]);
        }else{
            $user = User::find($id); 
            $user->update([
                'user_type' => $request->user_type,
                'name' => $request->name,
                'description' => $request->description,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'business_name' => $request->business_name,
                'landline_number' => $request->landline_number,
                'gstin' => $request->gstin,
                'rera_number' => $request->rera_number,
                'website' => $request->website,
                'status' => $request->status,
            ]);
        }

        
        if ($user) {
            $image = $request->file('profile_image');
            if(isset($image)){
                Helper::uploadImage($image, $user, 'user/'.$user->id, false, 'update', 'profile_image', true, false, true, false);                 
            }

            DB::commit();
            Helper::toastMsg(true, 'Successfully!');
            return redirect()->route('admin.users');
        } else {
            DB::rollBack();
            Helper::toastMsg(false, 'Failed to Added/Updated user!');
            return redirect()->back();
        }
        
    }   

    public function changeStatus(Request $request)
    {
        $user = User::find($request->entity_id);
        if($user){
            $user->status = $request->status;
            $user->save();
            return response()->json(['status' => 'success', 'message' => 'Status updated successfully']);
        }
        return response()->json(['status' => false, 'message' => 'user not found']);
    }
}
