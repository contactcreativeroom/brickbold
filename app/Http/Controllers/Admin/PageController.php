<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\PrivacyPolicy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{
    protected $adminAuth;
    private $pagerecords;
    private $prefix = 'admin';
    private $folder = 'page';
    
    public function __construct()
    {
        $this->pagerecords = config('constants.ADMIN_PAGE_RECORDS');
        $this->middleware(function ($request, $next) {
            $this->adminAuth = Auth::guard('admin')->user();
            return $next($request);
        });
    } 

    public function list(Request $request){ 
        $page = $request->page;
        $rows = Page::latest()->paginate($this->pagerecords, ['*'], 'page', $page);
        $data=array('rows'=>$rows);
        return view($this->prefix.'.'.$this->folder.'.list')->with($data);
    }
    
    public function add(){
        return view($this->prefix.'.'.$this->folder.'.form');
    }

    public function edit($id){
        
        $row = Page::find($id);
        
        $data=array('row' => $row);
        return view($this->prefix.'.'.$this->folder.'.form')->with($data);
    }

    public function postData(Request $request){
        $id = trim($request->input('id'));
        $title = trim($request->input('title'));
        $sub_title = trim($request->input('sub_title'));
        $icon = trim($request->input('icon'));
        $slug = trim($request->input('slug'));
        $description = trim($request->input('description'));
        $seo_title = trim($request->input('seo_title'));
        $seo_description = trim($request->input('seo_description'));
        $seo_keywords = trim($request->input('seo_keywords'));
        $status = trim($request->input('status'));

        $validationArray=array(
            'title'=>'required',
            'description'=>'required',
            'status'=>'required',
            
        );

        if(empty($id)){
            $validationArray['slug'] = 'required|unique:pages,slug';
        }else{
            $validationArray['slug'] = 'required|unique:pages,slug,'.$id;
        }
        
        $this->validate($request, $validationArray);

        DB::beginTransaction();

        $slug = preg_replace('/\s+/', '-', $slug);
        
        if(empty($id)){
            $page = Page::create(['title'=>$title, 'sub_title'=>$sub_title, 'slug'=>$slug, 'icon'=>$icon, 'description'=>$description,  'seo_title'=>$seo_title,  'seo_description'=>$seo_description,  'seo_keywords'=>$seo_keywords, 'status'=>$status]);
        }else{
            $page = Page::find($id);

            $page->title = $title;
            $page->sub_title = $sub_title;
            $page->slug = $slug;
            $page->icon = $icon;
            $page->description = $description;
            $page->seo_title = $seo_title;
            $page->seo_description = $seo_description;
            $page->seo_keywords = $seo_keywords;
            $page->status = $status;
            $page->save();
        }

        if($page){
            DB::commit();
            Helper::flashMessage(true, 'Page added/updated successfully!');
            return to_route('admin.pages');
        }else{
            DB::rollBack();
            Helper::flashMessage(false, 'Something went wrong');
            return redirect()->back();
        }
        
    }

    public function delete(Request $request){
        $id = trim($request->id);
        $row = Page::find($id); 
        $row->delete();
        return response()->json(['status' => 'success',]);
    }
     
}
