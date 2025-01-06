<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Helper\Helper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
//use Laravel\Sanctum\HasApiTokens;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'profile_image',
        'dob',
        'phone',
        'address',
        'country',
        'password',
        'password_confirmation',
        'token',
        'description',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    protected $appends = ['full_profile_image'];

    public function getFullProfileImageAttribute()
    {
        return Helper::getProfileImage('storage/user/profile/'.$this->id, $this->profile_image);
    } 

    public function Properties()
    {
        return $this->hasMany(Property::class);
    }

    public function Property()
    {
        return $this->hasOne(Property::class);
    }

    public function PropertyEnquiries()
    {
        return $this->hasMany(PropertyEnquiry::class);
    }

    public function favorites()
    {
        return $this->hasMany(Favorite::class);
    }
      
}
