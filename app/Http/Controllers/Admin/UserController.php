<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $users = User::latest()->paginate($this->pagerecords);
        $data=array('rows'=>$users);
        return view($this->prefix.'.users.list')->with($data);
    }

    public function detail(Request $request, $id){
        $user = User::find($id);
        $properties = $user->Properties()->paginate($this->pagerecords);
        $data=array('user'=>$user, 'rows'=>$properties);
        return view($this->prefix.'.users.detail')->with($data);
    }

    public function edit(Request $request, $id) {
        $user = User::find($id);
        $data = array('row' => $user);
        return view($this->prefix.'.users.form')->with($data);
    }

    public function postData(Request $request){
         $id = trim($request->input('id'));
        $validationArray=array(
            'title' => 'required',
            'sub_title' => 'max:255',            
        );
        if(empty($id)){
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
            $priority = User::max('priority'); 
            $user = User::create([
                'title' => $request->title,
                'sub_title' => $request->sub_title ?? NULL,
                'description' => $request->description ?? NULL,
                'priority' => $priority + 1,
                'status' => $request->status,
            ]);
        }else{
            $user = User::find($id); 
            $user->update([
                'title' => $request->title,
                'sub_title' => $request->sub_title ?? NULL,
                'description' => $request->description ?? NULL,
                'status' => $request->status,
            ]);
        }

        $image = $request->file('image');
        if(isset($image)){
            Helper::uploadImage($image, $user, 'user/'.$user->id, false, 'update', 'image', true, false, true, false);                 
        } 
        if ($user) {
            DB::commit();
            Helper::toastMsg(true, 'user Added/Updated successfully!');
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
