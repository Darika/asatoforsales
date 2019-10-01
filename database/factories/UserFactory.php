<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\City;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'register_ip' => '127.0.0.1',
        'last_ip' => '127.0.0.1',
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'phone' => $faker->unique()->randomNumber(11),
        'city_id' => City::all()->random(1),
        'login' => Str::random(7),
        'active' => 1,
    ];
});
