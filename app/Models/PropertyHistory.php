<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyHistory extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'property_id', 'current_status', 'meta_key', 'meta_values', 'status'
    ];
}
