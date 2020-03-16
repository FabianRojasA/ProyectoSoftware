<?php

use App\Group;
use Faker\Generator as Faker;

$factory->define(Group::class, function (Faker $faker) {
    return [
        'nombre' => $faker->word(). " " . $faker->word(),
        'logo' => $faker->imageUrl($width = 100, $height = 100),
    ];
});
