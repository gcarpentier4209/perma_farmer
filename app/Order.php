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
        return $this->belongsTo(User::class, 'id_user');
    }

    function products()
    {
        return $this->belongsToMany(Product::class, 'order_product', 'id_order', 'id_product');
    }

    function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }
}
