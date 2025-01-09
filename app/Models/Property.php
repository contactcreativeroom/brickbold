<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'slug', 'title', 'description', 'state', 'city', 'zip_code', 'location', 'price', 'price_detail', 'is_negotiable', 'availability', 'ownership', 'build_year', 'type', 'property_detail', 'for_type', 'plot_area', 'plot_type', 'carpet_area', 'builtup_area', 'floors', 'bedroom', 'bathroom', 'balcony', 'facing', 'furnished', 'approved_by', 'additional', 'amenities', 'video_link', 'status'
    ];

    protected static function boot(){
        parent::boot();

        static::created(function ($model) {
            $model->slug = $model->createSlug($model->title);
            $model->save();
        });

        // Update slug when the model is updated
        static::updating(function ($model) {
            if ($model->isDirty('title')) { // Check if the title is being changed
                $model->slug = $model->createSlug($model->title);
            }
        });
    }

    private function createSlug($name)
    {
        $slug = Str::slug($name);
        $count = static::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
        return $count ? "{$slug}-{$count}" : $slug;
    }

    public function images()
    {
        return $this->hasMany(PropertyImage::class);
    }

    public function image()
    {
        return $this->hasOne(PropertyImage::class)->latest('id');
    }

    public function favorites()
    {
        //$user = Auth::guard('user')->user();
        return $this->hasMany(Favorite::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function enquiry(){
        return $this->hasOne(PropertyEnquiry::class);
    }

    public function enquiries(){
        return $this->hasMany(PropertyEnquiry::class);
    }

    public function history(){
        return $this->hasOne(PropertyHistory::class);
    }

    public function histories(){
        return $this->hasMany(PropertyHistory::class);
    }
}
