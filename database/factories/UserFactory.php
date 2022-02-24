<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

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
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',//bcrypt(str_random(10))
        'remember_token' => Str::random(10),
    ];
});
$factory->define(\App\Content::class, function (Faker $faker) {
    return [
        'name' => $faker->userName,
        'release' => $faker->date('Y-m-d'),
        'is_serial' => $faker->boolean,
        'description' => $faker->paragraphs(2, true),
        'genre' => $faker->firstNameFemale,
        'country' => $faker->country,
        'language' => $faker->languageCode,
        'user_age' => $faker->numberBetween(5, 20),
    ];
});
$factory->define(\App\Movie::class, function (Faker $faker) {
    return [
        'name' => $faker->userName,
        'persian_name' => $faker->userName,
        'number' => $faker->numberBetween(1, 10),
        'season' => $faker->userName,
        'path' => $faker->url,
        'content_id' => $faker->numberBetween(1, 10),
        'description' => $faker->paragraphs(1, true),
    ];
});
$factory->define(\App\Picture::class, function (Faker $faker) {
    return [
        'path' => $faker->url,
        'content_id' => $faker->numberBetween(1, 10),
    ];
});
