<?php

use App\Unit;
use Faker\Generator as Faker;

$factory->define(Unit::class, function (Faker $faker) {
    return [
        'nombre' => $faker->company,
        'pais' => $faker->country,
    ];
});
