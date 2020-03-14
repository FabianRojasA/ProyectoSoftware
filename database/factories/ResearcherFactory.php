<?php

use App\Researcher;
use Faker\Generator as Faker;


$factory->define(Researcher::class, function (Faker $faker) {
    
    return [
        'numPasaporte' => $faker->word(2) . $faker->numberBetween(0,99),
        'estado' => $faker->randomElement(['ACTIVO','INACTIVO']),
        'unit_id' => $faker->numberBetween(1,50)
    ];
});
