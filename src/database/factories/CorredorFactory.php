<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use ApiRacer\Models\Corredor;
use Faker\Generator as Faker;

$factory->define(Corredor::class, function (Faker $faker) {
    $faker->addProvider(new \JansenFelipe\FakerBR\FakerBR($faker));

    return [
        'nome' => $faker->name,
        'cpf' => $faker->cpf,
        'data_nascimento' => $faker->date($format = 'Y-m-d', $max = 'now'),
    ];
});
