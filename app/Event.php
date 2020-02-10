<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'customer_id', 'title', 'description', 'image', 'begin', 'end', 'status', 'slug',
    ];


    public function customer() {

        return $this->belongsTo(Customer::class);
    }
}
