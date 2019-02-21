<?php
namespace app;
use Faker\Generator as Faker;
use Carbon\Carbon;
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

$factory->define(app\Models\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phonenumber' =>$faker->PhoneNumber,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(app\Models\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'body' => $faker->sentences(3,true),
        'is_pubmished' =>$faker->boolean,
        'excerpt' => $faker->paragraph, // secret
        'user_id' => app\Models\User::inRandomOrder()->first()->id,
        'created_at'=>\carbon\carbon::createFromDate(2017,rand(1,Carbon\carbon::now()->month()),rand(1,28))
    ];
});
