<?php

use Faker\Generator;
use App\User;

$factory->define(User::class, function (Generator $faker) {
    $faker = Faker\Factory::create('es_AR');
    return [
        'first_name' => $faker->optional()->firstName,
        'last_name' => $faker->optional()->lastName,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt($faker->password),
        'remember_token' => str_random(10),
        'username' => $faker->unique()->userName,
        'avatar' => $faker->optional()->imageUrl($width = 200, $height = 200),
    ];
});
