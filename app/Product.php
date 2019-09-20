<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Product extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'label',
        'sales_unit',
        'weight',
        //  'unit_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
    ];

    function unit()
    {
        return $this->hasOne(Unit::class);
    }

    function stock()
    {
        return $this->hasOne(Stock::class, 'id_product');
    }

    function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    function user()
    {
        return $this->belongsToMany(User::class);
    }
}
