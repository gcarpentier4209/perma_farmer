<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubscriptionOption extends Model
{
    protected $fillable = [
        'subscription_option_label',
        'subscription_price',
    ];

    function user()
    {
        return $this->belongsToMany(User::class);
    }
}
