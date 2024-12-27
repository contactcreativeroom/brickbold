<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $prefix = 'front';
    
    public function index(Request $request) { 
        return view('front.home');
    }
    public function about (Request $request) { 
        return view('front.about');
    }
    public function faq (Request $request) { 
        return view('front.faq');
    }
    public function contact (Request $request) { 
        return view('front.contact');
    }
    public function page($slug){    
        $page = Page::where(['slug' => $slug])->first();
        if(!$page){
            return to_route('home');
        }
        return view($this->prefix.'.page')->with(compact('page'));

    }
}
