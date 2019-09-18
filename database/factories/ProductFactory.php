<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {

   // static $number = 1;

    return [
        'label' =>$faker->unique()->randomLetter,
        'weight' => $faker->unique()->randomNumber,
        'sales_unit' => $faker->randomLetter
    ];
});
