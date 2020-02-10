<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Room extends Model
{
    protected $fillable = [
        'image', 'description', 'category_id', 'room_number', 'bed_count', 'status', 'phone'
    ];

    public function booking(){
        return $this->hasOne(Booking::class);
    }


    public function category(){
        return $this->belongsTo(Category::class);
    }
}
