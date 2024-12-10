<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helper\Helper;
use App\Models\MetaDetails;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MetaDetailController extends Controller
{
    protected $adminAuth;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->adminAuth = Auth::guard('admin')->user();
            return $next($request);
        });
    }
    
    public function metaList()
    {
        $meta_details = MetaDetails::orderBy('id', 'desc')->get();
        return view('admin.meta.list', compact('meta_details'));
    }

    public function metaSave(Request $request)
    {
        $constant_pages_id = [];
        $meta_non_existing_pages = [];
        // $constant_pages = config('constants.STATIC_PAGES');
        $meta_details = MetaDetails::where('related_type', config('constants.META_RELATED_TYPE.Static_page'))->pluck('related_id')->toArray();
        $pages = array_flip(config('constants.STATIC_PAGES'));

        foreach ($pages as $key => $value) {
            if (!in_array($key, $meta_details)) {
                $meta_non_existing_pages[$key] = $value;
            }
        }
        $meta_non_existing_pages;

        if ($request->method() == 'POST') {

            $rules = [
                'page' => 'required',
                'meta_title' => 'required',
                'meta_description' => 'required',
                'meta_keywords' => 'required',
            ];

            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {

                Helper::toastMsg(false, 'Validation Error!');
                return back()->withInput()->withErrors($validator);
            }

            $data = [
                'title' => $request->meta_title,
                'description' => $request->meta_description,
                'keywords' => $request->meta_keywords,
                'related_id' => $request->page,
                // 'url' => Helper::getUrlByPage(['page_id' => $request->page]),
                'related_type' => config('constants.META_RELATED_TYPE.Static_page'),
            ];

            $meta_saved = Helper::saveMetaDetails($data);
            if ($meta_saved) {
                Helper::toastMsg(true, 'Meta Details Saved Successfully!');
                return redirect()->route('admin.meta.list');
            }
        }

        return view('admin.meta.create', compact('meta_non_existing_pages'));
    }

    public function metaUpdate(Request $request, $id)
    {
        if ($request->method() == 'POST') {

            $rules = [
                'page' => 'required',
                'meta_title' => 'required',
                'meta_description' => 'required',
                'meta_keywords' => 'required',
            ];

            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {

                Helper::toastMsg(false, 'Validation Error!');
                return back()->withInput()->withErrors($validator);
            }

            $data = [
                'title' => $request->meta_title,
                'description' => $request->meta_description,
                'keywords' => $request->meta_keywords,
                'related_id' => $request->page,
                'related_type' => config('constants.META_RELATED_TYPE.Static_page'),
                // 'url' => Helper::getUrlByPage(['page_id' => $request->page]),
            ];
            $meta_updated = Helper::saveMetaDetails($data);
            if ($meta_updated) {
                Helper::toastMsg(true, 'Meta Details Updated Successfully!');
                return redirect()->route('admin.meta.list');
            }
        }

        $meta_details = MetaDetails::find($id);

        return view('admin.meta.update', compact('meta_details'));
    }
}
