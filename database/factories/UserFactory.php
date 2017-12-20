<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(soyDeporte\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(soyDeporte\Post::class, function (Faker $faker) {
    static $password;

    return [
        'titulo' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'texto' => $faker->text($maxNbChars = 200),
        'estado' => $faker->randomElements($array = array ('A'), $count = 1),
        'user_id' => $faker->numberBetween($min = 1, $max = 2), 
        'categori_id' => $faker->numberBetween($min = 1, $max = 4),
    ];
});