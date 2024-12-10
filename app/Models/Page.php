<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{ 
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title', 'sub_title', 'slug', 'description', 'status', 'icon', 'seo_title', 'seo_description', 'seo_keywords'
    ];
}
