<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
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
}
