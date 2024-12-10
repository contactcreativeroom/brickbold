<?php

namespace App\Models;

use App\Helper\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = [
        'priority',
        'title',
        'sub_title',
        'description',
        'image',
        'link',
        'status',
    ];

    protected $appends = ['full_image', 'full_dark_image'];

    public function getFullImageAttribute()
    {
        return Helper::getImage('storage/banner/'.$this->id, $this->image);
    }

    public function getFullDarkImageAttribute()
    {
        return Helper::getImage('storage/banner/'.$this->id, $this->dark_image);
    }
       
}
