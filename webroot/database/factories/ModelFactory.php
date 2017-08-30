<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define('App\Report', function (Faker\Generator $faker) {
   return [
       'wave_size_in_body' => $faker->randomElement([
           'Ankle to Knee',
           'Knee to Thigh',
           'Thigh to Waist',
           'Waist to Stomach',
           'Stomach to Chest',
           'Chest to Shoulder',
           'Shoulder to Head',
           'Head to Overhead',
           'Overhead'
       ]),
       'wave_size' => $faker->numberBetween(0, 6),
       'wind_speed' => $faker->numberBetween(0, 25),
       'wind_direction' => $faker->numberBetween(1, 360),
       'picture' => 'https://unsplash.it/200/300'
   ];
});