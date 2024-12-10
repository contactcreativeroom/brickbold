<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Helper;
use App\Http\Controllers\Controller;

use App\Models\Admin;
use App\Models\Category;
use Hamcrest\Core\SetTest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Session; 
use Mail;
use Hash;
use Image;


class CategoryController extends Controller
{
    public $successStatus=200;
    private $prefix = 'admin';
    private $pagerecords;

    public function __construct(){
    	$this->middleware('admin');
        $this->pagerecords = config('constants.ADMIN_PAGE_RECORDS');
    }

    public function list(Request $request){
        $categories = Category::paginate($this->pagerecords);
        $data=array('rows'=>$categories);
        return view($this->prefix.'.category.list')->with($data);
    }
     
    public function add(Request $request){
        $categories = Category::all();
        return view($this->prefix.'.category.form',['categories' => $categories]);
    }

    public function edit(Request $request, $id){
        $category = Category::where('id',$id)->first();
        if( !$category  ){  
            Helper::toastMsg(false, "Category not found.");
            return back();  
        } 
        $categories = Category::where('id', '!=', $id)->get();
        return view($this->prefix.'.category.form',['row' => $category, 'categories' => $categories]);
    }
    
    public function postData(Request $request){
        $id = trim($request->input('id'));
        $validationArray = [
            'name' => 'required',
        ]; 
        if (empty($id)) {
            $validationArray['image'] = 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048';
        }  

        $validator = Validator::make($request->all(), $validationArray);
        if ($validator->fails()) {
            $errorMessage = null;
            foreach ($validator->errors()->getMessages() as $error) {
                $errorMessage = $error[0];
                break;
            }
            Helper::toastMsg(false, $errorMessage);
            return redirect()->back();
        }
        if (!empty($id) && $request->parent_category == $id) { 
            Helper::toastMsg(false, "Parent category cannot be the same as the current category.");
            return redirect()->back();
        } 
        DB::beginTransaction();
        try {
            if (empty($id)) {
                $category = new Category;
            } else {
                $category = Category::findOrFail($id);
            }

            $category->p_category = $request->parent_category;
            $category->name = $request->name;
            $category->status = $request->status;
            $category->save();

            // Handle image uploads
            if ($image = $request->file('image')) {
                Helper::uploadImage($image, $category, 'category/' . $category->id, false, 'update', 'image', true, true, true, false);
            }
            if ($dark_image = $request->file('dark_image')) {
                Helper::uploadImage($dark_image, $category, 'category/' . $category->id, false, 'update', 'dark_image', true, true, true, false);
            }

            DB::commit();
            Helper::toastMsg(true, 'Category Added/Updated successfully!');
            return redirect()->route('admin.categories');
        } catch (\Exception $e) {
            DB::rollBack();
            Helper::toastMsg(false, $e->getMessage()); 
            return redirect()->back();
        }
    }


    public function delete(Request $request, $id){
        $category = Category::find($request->entity_id);
        $category->delete();
        return response()->json(['status' => 'success',]);
    }

    public function changeStatus(Request $request) {
        $category = Category::find($request->entity_id);
        $category->status = $request->status;
        $category->save();
        return response()->json(['status' => 'success', 'message' => 'Status updated successfully']);
    }
}