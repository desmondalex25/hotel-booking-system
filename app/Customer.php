<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'gender', 'country', 'state', 'address', 'image', 'slug',
    ];

    public function bookings()
    {
        return $this->hasMany(App\Booking);
    }

    public function events()
    {
        return $this->hasMany(App\Event);
    }
}
