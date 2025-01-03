<?php

namespace App\Models;

use App\Helper\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'p_category', 'name', 'image', 'dark_image', 'status'
    ];

    protected $appends = ['full_image', 'full_dark_image'];

    public function getFullImageAttribute()
    {
        return Helper::getImage('storage/category/'.$this->id, $this->image);
    }

    public function getFullDarkImageAttribute()
    {
        return Helper::getImage('storage/category/'.$this->id, $this->dark_image);
    }
    
    protected static function boot()
    {
        parent::boot();

        static::created(function ($model) {
            $model->slug = $model->createSlug($model->name);
            $model->save();
        });
    }

    private function createSlug($name)
    {
        $slug = Str::slug($name);
        $count = static::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
        return $count ? "{$slug}-{$count}" : $slug;
    }

     
}
