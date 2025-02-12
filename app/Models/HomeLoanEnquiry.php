<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeLoanEnquiry extends Model
{
    use HasFactory;
    protected $fillable = [
        'amount', 'phone', 'city', 'finalized', 'status'
    ];
}
