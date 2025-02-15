<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    private $prefix = 'user';
    protected $userAuth;
    private $pagerecords;

    public function __construct()
    {
        $this->pagerecords = config('constants.FRONT_PAGE_RECORDS');
        $this->middleware(function ($request, $next) {
            $this->userAuth = Auth::guard('user')->user();
            return $next($request);
        });
    }
 
    public function index()
    {
        $user = $this->userAuth;
        $properties = $user->Properties()->get();
        $rows = $user->Properties()->paginate($this->pagerecords);
        $data=array('rows'=>$rows, 'properties'=>$properties, 'user'=>$user);
        return view($this->prefix.'.dashboard')->with($data);
    }
}
