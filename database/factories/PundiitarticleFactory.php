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

$factory->define(App\Pundiitarticle::class, function (Faker $faker) {
    return [
		'identity' => $faker->text(20),
        'name' => $faker->text(30),
        'author' => $faker->text(20),
        'title' => $faker->text(40),
        'body' => $faker->text(100),
        'url' => $faker->text(100),
        'imageUrl' => $faker->text(100),
        'publicationDate' => now(),
        'created_at' => now(),
        'updated_at' => now()
//        'title' => $faker->text(50),
//        'body' => $faker->text(200)
    ];
});
