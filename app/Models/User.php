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
        'unique_id',
        'user_type',
        'for_type',
        'name',
        'email',
        'email_verified_at',
        'profile_image',
        'dob',
        'phone',
        'landline_number',
        'description',
        'business_name',
        'address',
        'country',
        'gstin',
        'rera_number',
        'website',
        'password',
        'password_confirmation',
        'token',
        'google_id',
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

    public function Orders()
    {
        return $this->hasMany(Order::class);
    }

    public function Order()
    {
        return $this->hasOne(Order::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function subscription()
    {
        return $this->hasOne(UserSubscription::class)->latest();
    }
    
    public function subscriptions()
    {
        return $this->hasMany(UserSubscription::class);
    }
      
}
