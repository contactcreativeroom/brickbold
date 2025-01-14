<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id', 'r_payment_id', 'order_id', 'product_id', 'method', 'currency', 'email', 'phone', 'amount', 'status', 'json_response'
    ];
}
