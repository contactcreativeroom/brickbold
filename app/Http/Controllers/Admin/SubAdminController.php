<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helper\Helper;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator; 

class SubAdminController extends Controller
{
    public $successStatus=200;
    private $prefix = 'admin';
    private $pagerecords;

    public function __construct(){
    	$this->middleware('admin');
        $this->pagerecords = config('constants.ADMIN_PAGE_RECORDS');
    }

    public function list()
    {
        $rows = Admin::where('level',2)->latest()->paginate($this->pagerecords);
        return view('admin.sub-admin.list', compact('rows'));
    }

    public function add(Request $request){   
        return view($this->prefix.'.sub-admin.form');
    }

    public function edit(Request $request, $id) {
        $subAdmin = Admin::find($id);
        $data = array('row' => $subAdmin);
        return view($this->prefix.'.sub-admin.form')->with($data);
    }

    public function postData(Request $request){
        $id = trim($request->input('id'));
        $image = trim($request->input('image'));
        $validationArray=array(
            'name'=>'required',     
            'email'=>'required|email|unique:admins,email,'.$id,
        );
        if(empty($id)){
            $validationArray['password'] = 'required|min:6';
        }
        if(!empty($image)){
            $validationArray['image'] = 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048';
        }
        $validator = Validator::make($request->all(), $validationArray);
        if($validator->fails()){
            $errorMessage=null;
            foreach($validator->errors()->getMessages() as $error){
                $errorMessage=$error[0];
                break;
            }
            Helper::toastMsg(false, $errorMessage);
            return redirect()->back(); 
        }       

        DB::beginTransaction();        
        if(empty($id)){ 
            $subAdmin = Admin::create([
                'name'=>$request->name, 
                'email'=>$request->email, 
                'phone'=>$request->phone, 
                'password'=>$request->password, 
                'level'=>2, 
                'status' => $request->status,
            ]);
            $details = array(
                'logo' => Helper::getLogo(),
                'name'=> $request->name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'password'=>$request->password,
             );
            dispatch(new \App\Jobs\SubAdminQueue($details));
        }else{
            $subAdmin = Admin::find($id); 
            $subAdmin->update([
                'name'=>$request->name, 
                'email'=>$request->email, 
                'phone'=>$request->phone, 
                'level'=>2, 
                'status' => $request->status,
            ]);
        }

        $image = $request->file('image');
        if(isset($image)){
            Helper::uploadImage($image, $subAdmin, 'subadmin/'.$subAdmin->id, false, 'update', 'image', true, false, true, false);                 
        } 
        if ($subAdmin) {
            DB::commit();
            Helper::toastMsg(true, 'Added/Updated successfully!');
            return redirect()->route('admin.subadmins');
        } else {
            DB::rollBack();
            Helper::toastMsg(false, 'Failed to Added/Updated!');
            return redirect()->back();
        }
        
    }   

    public function changeStatus(Request $request)
    {
        $subAdmin = Admin::find($request->entity_id);
        if($subAdmin){
            $subAdmin->status = $request->status;
            $subAdmin->save();
            return response()->json(['status' => 'success', 'message' => 'Status updated successfully']);
        }
        return response()->json(['status' => false, 'message' => 'Sub admin not found']);
    }

    public function delete(Request $request)
    { 
        $subAdmin = Admin::find($request->entity_id);
        if($subAdmin){
            $subAdmin->delete();
            return response()->json(['status' => 'success',]);
        }
        return response()->json(['status' => false, 'message' => 'Sub admin not found']);
    }
}
