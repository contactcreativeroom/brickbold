<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $fillable = [
        'type', 'name', 'profile', 'property_type', 'unit', 'months', 'post_property', 'price', 'discount', 'grand_price', 'status'
    ];

    public function field(){
        return $this->hasOne(PackageField::class) ; 
    } 

    public function fields(){
        return $this->hasMany(PackageField::class) ; 
    } 

    public function Orders()
    {
        return $this->hasMany(Order::class);
    }

    public function Order()
    {
        return $this->hasOne(Order::class);
    }
}
