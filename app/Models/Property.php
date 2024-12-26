<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'title', 'description', 'state', 'city', 'zip_code', 'location', 'price', 'price_detail', 'is_negotiable', 'availability', 'ownership', 'build_year', 'type', 'property_detail', 'for_type', 'plot_area', 'plot_type', 'carpet_area', 'builtup_area', 'floors', 'bedroom', 'bathroom', 'balcony', 'facing', 'furnished', 'approved_by', 'additional', 'amenities', 'video_link', 'status'
    ];

    public function images()
    {
        return $this->hasMany(PropertyImage::class);
    }

    public function image()
    {
        return $this->hasOne(PropertyImage::class)->latest('id');
    }
}
