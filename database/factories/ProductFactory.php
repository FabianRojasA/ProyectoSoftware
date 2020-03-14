<?php

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'descripcion' => $faker->text(200),
        'fechaCreacion' => $faker->dateTimeThisDecade,
        'group_id' => $faker->numberBetween(1,15),
        'project_id' => $faker->numberBetween(1,30)
    ];
});
