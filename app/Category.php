<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
      'type', 'price',
    ];
    public function room()
    {
        return $this->belongsTo(App\Room);
    }
}
