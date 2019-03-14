<?php

use Faker\Generator as Faker;

// $factory->define(Model::class, function (Faker $faker) {
$factory->define(App\Tracking::class, function (Faker $faker) {
    return [
        'reference_code' => Str::random(10),
        'delivery_date' => now()     
    ];
});