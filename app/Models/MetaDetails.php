<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetaDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'related_id',
        'related_type',
        'title',
        'keywords',
        'description',
    ];
}
