<?php

use App\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'nombre' => $faker->sentence(4,true),
        'codigo' => "C-" . $faker->numberBetween(0,99),
        'estado' => $faker->randomElement(['POSTULADO','EN EJECUCION','FINALIZADO','CANCELADO']),
        'fechaInicio' => $faker->dateTimeBetween('-1 years', 'now'),
        'fechaTermino' => $faker->dateTimeBetween('now','+1 years'),
        'group_id' => $faker->numberBetween(1,15)
    ];
});
