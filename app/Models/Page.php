<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Page extends Model
{ 
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title', 'sub_title', 'slug', 'description', 'status', 'icon', 'seo_title', 'seo_description', 'seo_keywords'
    ];

    /*protected static function boot(){
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
    }*/
}
