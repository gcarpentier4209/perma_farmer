<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = [
        'date_start',
        'date_end',
    ];

    function user()
    {
        return $this->belongsTo(User::class);
    }

    function subscriptionOption()
    {
        return $this->belongsTo(SubscriptionOption::class);
    }

    function orders()
    {
        return $this->hasMany(Order::class);
    }

}
