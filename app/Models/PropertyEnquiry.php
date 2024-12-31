<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyEnquiry extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'property_id', 'name', 'email', 'phone', 'message', 'status'
    ];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}