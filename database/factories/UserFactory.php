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

$factory->define(App\User::class, function (Faker $faker) {
    return [
		'firstname' => $faker->text(20),
        'surname' => $faker->text(30),
        'webaddress' => $faker->text(40),
        'sitecategory' => $faker->text(100),
        'email' => $faker->text(100),
        'password' => $faker->text(100),
        'remember_token' => $faker->text(100),
        'created_at' => now(),
        'updated_at' => now()
//        'name' => $faker->name,
//        'email' => $faker->unique()->safeEmail,
//        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
//        'remember_token' => str_random(10),
    ];
});
