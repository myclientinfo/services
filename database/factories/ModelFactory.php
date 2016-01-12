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

$factory->define(App\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt('TESTING'),
        'remember_token' => '',
    ];
});

$factory->define(App\Category::class, function ($faker) {
    return [
        'name' => $faker->word,
    ];
});

$factory->define(App\Type::class, function ($faker) {
    return [
        'name' => $faker->domainWord,
    ];
});

$factory->define(App\Supplier::class, function ($faker) {
    return [
        'type_id' => $faker->numberBetween(1, 5),
        'status_id' => 1,
        'title' => $faker->catchPhrase,
        'summary' => $faker->sentence,
        'description' => $faker->paragraph
    ];
});

$factory->define(App\Service::class, function ($faker) {
    return [
        'name' => $faker->bs,
        'category_id' => $faker->numberBetween(1, 3),
        'active' => 1,
    ];
});

$factory->define(App\Comment::class, function ($faker) {
    return [
        'user_id' => $faker->numberBetween(1,20),
        'comment' => $faker->paragraph
    ];
});

$factory->define(App\Region::class, function ($faker) {
    return [
        'name' => $faker->city
    ];
});

$factory->define(App\Photo::class, function ($faker) {
    return [
        'title' => $faker->sentence,
        'photo' => $faker->imageUrl(600, 800, 'cats')
    ];
});

$factory->define(App\Rate::class, function ($faker) {
    $multiplier = rand(10, 15);
    return [
        'price' => $multiplier * 10,
        'period_id' => $faker->numberBetween(1,3)
    ];
});