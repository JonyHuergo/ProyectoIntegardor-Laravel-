<?php

use Faker\Generator;
use App\Field;

$factory->define(Field::class, function (Generator $faker) {
    $faker = Faker\Factory::create('es_AR');
    return [
        'name' => $faker->company,
        'address' => $faker->streetAddress,
        'sport' => $faker->randomElement(['Futbol','Tenis','Hockey']),
        'hourly_price' => $faker->numberBetween($min = 50, $max = 500),
    ];
});
