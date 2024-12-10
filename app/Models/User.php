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
        'password',
        'dob',
        'country',
        'address',
        'profile_image',
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

    function booked(){
        return $this->hasMany(Booking::class)->with('service')->latest('created_at');
    }

    public function bookingLatestLimit()
    {
        return $this->hasMany(Booking::class)->latest('created_at')->limit(config('constants.ADMIN_RECORDS.bookings'));
    }
    
    function bookedDetail(){ 
        return $this->hasMany(Booking::class)->with('service')->latest('created_at');
    }

    public function rating()
    {
        return $this->hasMany(Rating::class);
    }
    public function chats()
    {
        return $this->hasMany(Chat::class);
    }

    function wishlists(){
        return $this->hasMany(Wishlist::class);
    }

    public function vendorChats($vendorId)
    {
        return $this->chats()->where('vendor_id', $vendorId)->get();
    } 

    public function getChatsGroupedByVendor()
    {
        $chatsGroupedByVendor = $this->chats()->with('vendor')->get()->groupBy('vendor_id');

        $formattedChats = [];
        foreach ($chatsGroupedByVendor as $vendorId => $chats) {
            $vendor = $chats->first()->vendor; 
            $formattedChats[$vendorId] = $vendor->toArray(); 
            $formattedChats[$vendorId]["chat"] = $chats->toArray();

            /*$formattedChats[$vendorId]["chat"] = $chats->map(function ($chat) {
                return [
                    'vendor_id' => $chat->vendor_id,
                    'message' => $chat->message,
                    'created_at' => $chat->created_at,
                ];
            })->toArray();*/
        }
        return $formattedChats;
    }
}
