<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageField extends Model
{
    use HasFactory;
    protected $fillable = [
        'package_id', 'heading', 'value', 'status'
    ];

    public function package(){
        return $this->belongsTo(Package::class);
    }
}
