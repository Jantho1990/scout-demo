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

$factory->define(App\Product::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'description' => $faker->text,
        'brand' => $faker->company,
        'price' => $faker->randomFloat(2, 0, 500),
        'image_url' => 'http://lorempixel.com/500/500/'
    ];
});
