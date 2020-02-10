<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
      'image_title', 'description', 'image_name', 'slug',
    ];
}
