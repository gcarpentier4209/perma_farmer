<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubscriptionOption extends Model
{
    protected $fillable = [
        'label',
        'price',
        'weight',
    ];

    function user()
    {
        return $this->belongsToMany(User::class);
    }

    function subscription()
    {
        return $this->hasMany(Subscription::class);
    }


}
