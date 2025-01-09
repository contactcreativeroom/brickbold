<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Booking;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Order;
use App\Models\Property;
use App\Models\PropertyEnquiry;
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
       
     
    public function dashboard()
    {
        // return view('admin.index');
        $userTotal = User::latest()->get();
        $properties = Property::latest()->get();
        $totalEarned = $this->totalEarned();
        $thisYearTotalEarnedMonthWise = $this->thisYearTotalEarnedMonthWise();
        $thisYearTotalPropertiesMonthWise = $this->thisYearTotalPropertiesMonthWise();
        $thisYearTotalPropertiesSoldMonthWise = $this->thisYearTotalPropertiesSoldMonthWise();

        $previousYearTotalEarnedMonthWise = $this->previousYearTotalEarnedMonthWise();
        $previousYearTotalPropertiesMonthWise = $this->previousYearTotalPropertiesMonthWise();
        $previousYearTotalPropertiesSoldMonthWise = $this->previousYearTotalPropertiesSoldMonthWise();
        $data=array(
            'userTotal'=>$userTotal,
            'properties'=>$properties,
            'totalEarned'=>$totalEarned,
            'thisYearTotalEarnedMonthWise'=>$thisYearTotalEarnedMonthWise,
            'thisYearTotalPropertiesMonthWise'=>$thisYearTotalPropertiesMonthWise,
            'thisYearTotalPropertiesSoldMonthWise'=>$thisYearTotalPropertiesSoldMonthWise,
            'previousYearTotalEarnedMonthWise'=>$previousYearTotalEarnedMonthWise,
            'previousYearTotalPropertiesMonthWise'=>$previousYearTotalPropertiesMonthWise,
            'previousYearTotalPropertiesSoldMonthWise'=>$previousYearTotalPropertiesSoldMonthWise,
        );
        return view($this->prefix.'.dashboard.index')->with($data);
    } 

    public function totalEarned(){
        // $totalEarned = Order::where('orders.order_status', 'Completed')
        //     // ->whereYear('orders.created_at', date('Y'))
        //     ->sum('total_price');
        
        $totalEarned = 100000000000;
        return config('constants.CURRENCIES.symbol'). Helper::priceFormat($totalEarned);
    }

    public function thisYearTotalEarnedMonthWise() {        
        // $earnedData = Order::selectRaw('MONTH(orders.created_at) as month, SUM(total_price) as total_earned')
        //     ->where('orders.order_status', 'like', 'Completed')
        //     ->whereYear('orders.created_at', date('Y'))
        //     ->groupBy('month')
        //     ->orderBy('month', 'asc')
        //     ->pluck('total_earned', 'month')
        //     ->toArray();
        $months = range(1, 12);
        $totalEarnedMonthWise = [];
        foreach ($months as $month) {
            // $totalEarnedMonthWise[] = $earnedData[$month] ?? 0 ;
            $totalEarnedMonthWise[] = rand(100000, 1000000000) ;
        }    
        return $totalEarnedMonthWise;
    }

    
    public function thisYearTotalPropertiesMonthWise() {        
        $data = Property::selectRaw('MONTH(properties.created_at) as month, COUNT(*) as total')
            ->whereYear('properties.created_at', date('Y'))
            ->groupBy('month')
            ->orderBy('month', 'asc')
            ->pluck('total', 'month')
            ->toArray();
        $months = range(1, 12);
        $totalBookedMonthWise = [];
        foreach ($months as $month) {
            $totalBookedMonthWise[] = $data[$month] ?? 0 ;
        }    
        return $totalBookedMonthWise;
    }

    public function thisYearTotalPropertiesSoldMonthWise() {
        $data = Property::selectRaw('MONTH(properties.sold_date) as month, COUNT(*) as total')
            ->where('properties.status', 3)
            ->whereYear('properties.sold_date', date('Y'))
            ->groupBy('month')
            ->orderBy('month', 'asc')
            ->pluck('total', 'month')
            ->toArray();
        $months = range(1, 12);
        $totalBookedMonthWise = [];
        foreach ($months as $month) {
            $totalBookedMonthWise[] = $data[$month] ?? 0 ;
        }    
        return $totalBookedMonthWise;
    }

     

    public function previousYearTotalEarnedMonthWise(){
        // $earnedData = Order::selectRaw('MONTH(orders.created_at) as month, SUM(total_price) as total_earned')
        //     ->where('orders.order_status', 'like', 'Completed')
        //     ->whereYear('orders.created_at', date('Y')-1)
        //     ->groupBy('month')
        //     ->orderBy('month', 'asc')
        //     ->pluck('total_earned', 'month')
        //     ->toArray();
        $months = range(1, 12);
        $totalEarnedMonthWise = [];
        foreach ($months as $month) {
            // $totalEarnedMonthWise[] = isset($earnedData[$month]) ? -1 * $earnedData[$month] : 0;
            $totalEarnedMonthWise[] = rand(100000, 1000000000) ;
        }    
        return $totalEarnedMonthWise;
    }

    public function previousYearTotalPropertiesMonthWise() {
        $data = Property::selectRaw('MONTH(properties.sold_date) as month, COUNT(*) as total')
            ->whereYear('properties.created_at', date('Y')-1)
            ->groupBy('month')
            ->orderBy('month', 'asc')
            ->pluck('total', 'month')
            ->toArray();

        $months = range(1, 12);
        $totalBookedMonthWise = [];
        foreach ($months as $month) {
            $totalBookedMonthWise[] = $data[$month] ?? 0 ;
        }    
        return $totalBookedMonthWise;
    }

    public function previousYearTotalPropertiesSoldMonthWise() {

        $data = Property::selectRaw('MONTH(properties.sold_date) as month, COUNT(*) as total')
            ->where('properties.status', 3)
            ->whereYear('properties.sold_date', date('Y')-1)
            ->groupBy('month')
            ->orderBy('month', 'asc')
            ->pluck('total', 'month')
            ->toArray();

        $months = range(1, 12);
        $totalBookedMonthWise = [];
        foreach ($months as $month) {
            $totalBookedMonthWise[] = $data[$month] ?? 0 ;
        }    
        return $totalBookedMonthWise;
    }

     

    public function contactEnquiries(Request $request){
        $enquiries = Contact::latest()->paginate($this->pagerecords);
        $data=array('rows'=>$enquiries);
        return view($this->prefix.'.contact-enquiries')->with($data);
    } 

    public function propertyEnquiries(Request $request){
        $enquiries = PropertyEnquiry::latest()->paginate($this->pagerecords);
        $data=array('rows'=>$enquiries);
        return view($this->prefix.'.property-enquiries')->with($data);
    } 

}
