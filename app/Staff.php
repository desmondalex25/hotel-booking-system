<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = [
        'firstname', 'lastname', 'username', 'email', 'address', 'password', 'role', 'staff_id', 'reg', 'phone', 'image', 'slug',
    ];

}
