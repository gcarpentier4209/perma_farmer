<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Stock;
use Faker\Generator as Faker;

$factory->define(Stock::class, function (Faker $faker) {

    static $number = 1;

    return [
        'id_product' => $faker->unique()->randomNumber,
        'stock_quantity' => $number++,
    ];
});
