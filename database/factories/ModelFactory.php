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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Product::class, function (Faker\Generator $faker) {
    return [
        'brand_id' => 1,
        'model_id' => 1,
        'category_id' => 1,
        'supplier_id' => 1,
        'name' => $faker->word,
        'unit_price' => $faker->numberBetween($min = 1000, $max = 100000),
        'stock' => $faker->randomNumber,
        'description' => $faker->paragraph,
    ];
});
