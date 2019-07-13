<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use ApiRacer\Models\Prova;
use Faker\Generator as Faker;

$factory->define(Prova::class, function (Faker $faker) {
    return [
        'tipo' => $faker->randomElement(['3km', '5km', '10km', '21km', '42km']),
        'data' => $faker->date($format = 'Y-m-d H:i:s', $max = 'now'),
    ];
});
