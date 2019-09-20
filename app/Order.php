<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'preparation_date',
        'removal_date',
        'status'
    ];

    function user()
    {
        return $this->belongsTo(User::class);
    }

    function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
