<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'package_id', 'razorpay_order_id', 'package_type', 'package_name', 'package_price', 'discount', 'grand_price', 'package_value', 'post_property', 'contacts', 'days', 'adminorder_date', 'status'
    ];

    public function user(){
        return $this->belongsTo(User::class) ; 
    } 

    public function package(){
        return $this->belongsTo(Package::class) ; 
    } 
}
