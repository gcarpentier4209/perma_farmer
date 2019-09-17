<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    function unit()
    {
        return $this->belongsToMany(Product::class);
    }
}
