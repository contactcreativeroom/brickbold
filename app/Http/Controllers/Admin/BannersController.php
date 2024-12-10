<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use App\Models\Banner;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule; 



class BannersController extends Controller
{
    public $successStatus=200;
    private $prefix = 'admin';
    private $pagerecords;

    public function __construct(){
    	$this->middleware('admin');
        $this->pagerecords = config('constants.ADMIN_PAGE_RECORDS');
    }

    public function list(Request $request){
        $banners = Banner::orderBy('priority', 'asc')->paginate($this->pagerecords);
        $data=array('rows'=>$banners);
        return view($this->prefix.'.banners.list')->with($data);
    }

    public function add(Request $request){   
        return view($this->prefix.'.banners.form');
    }

    public function edit(Request $request, $id) {
        $banner = Banner::find($id);
        $data = array('row' => $banner);
        return view($this->prefix.'.banners.form')->with($data);
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
            $priority = Banner::max('priority'); 
            $banner = Banner::create([
                'title' => $request->title,
                'sub_title' => $request->sub_title ?? NULL,
                'description' => $request->description ?? NULL,
                'priority' => $priority + 1,
                'status' => $request->status,
            ]);
        }else{
            $banner = Banner::find($id); 
            $banner->update([
                'title' => $request->title,
                'sub_title' => $request->sub_title ?? NULL,
                'description' => $request->description ?? NULL,
                'status' => $request->status,
            ]);
        }

        $image = $request->file('image');
        if(isset($image)){
            Helper::uploadImage($image, $banner, 'banner/'.$banner->id, false, 'update', 'image', true, false, true, false);                 
        } 
        if ($banner) {
            DB::commit();
            Helper::toastMsg(true, 'Banner Added/Updated successfully!');
            return redirect()->route('admin.banners');
        } else {
            DB::rollBack();
            Helper::toastMsg(false, 'Failed to Added/Updated banner!');
            return redirect()->back();
        }
        
    }   

    public function changeStatus(Request $request)
    {
        $banner = Banner::find($request->entity_id);
        if($banner){
            $banner->status = $request->status;
            $banner->save();
            return response()->json(['status' => 'success', 'message' => 'Status updated successfully']);
        }
        return response()->json(['status' => false, 'message' => 'Banner not found']);
    }

    public function delete(Request $request)
    { 
        $banner = Banner::find($request->entity_id);
        if($banner){
            $banner->delete();
            return response()->json(['status' => 'success',]);
        }
        return response()->json(['status' => false, 'message' => 'Banner not found']);
    }

    public function changePriority(Request $request)
    {
        $id_sequence = $request->entityIdArr;
        foreach ($id_sequence as $key => $value) {
            Banner::where('id', $value)->update(['priority' => ($key + 1)]);
        }
        return response()->json(['status' => 'success']);
    }
}
