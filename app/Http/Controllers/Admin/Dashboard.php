<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Booking;
use App\Models\Category;
use App\Models\Service;
use App\Models\User;
use App\Models\Vendor;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    protected $adminAuth;

    private $prefix = 'admin';
    private $pagerecords;

    public function __construct(){
    	$this->middleware('admin');
        $this->pagerecords = config('constants.ADMIN_PAGE_RECORDS');
    }
       
    public function dashboard(){ 
        $data=array( );
        return view($this->prefix.'.dashboard.index')->with($data);
    }    

}
