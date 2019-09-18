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
}
