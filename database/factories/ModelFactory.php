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
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(123456),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Category::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
    ];
});

$factory->define(App\Product::class, function (Faker\Generator $faker) {
    return [
        'name' => str_replace('.', '_', $faker->unique()->userName),
        'title' => $faker->text(10),
        'about' => $faker->text(20),
        'price' => $faker->numberBetween(1,200),
        'img'=> 'img/'.$faker->numberBetween(1,12).'.jpg',
    ];
});

$factory->define(App\Detail::class, function (Faker\Generator $faker) {
    return [
        'size' => $faker->numberBetween(1,12),
        'weight' => $faker->numberBetween(1,12),
        'discription' => $faker->text(20),
    ];
});

$factory->define(App\SubCategory::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->domainWord,
    ];
});

$factory->define(App\Order::class, function (Faker\Generator $faker) {
    return [
        'fullname' => $faker->name,
        'email' => $faker->email,
        'address1' => $faker->address,
        'address2' => $faker->address,
        'facebook' => $faker->domainWord,
        'country' => $faker->country,
        'phone' => $faker->tollFreePhoneNumber,
        'note' => $faker->realText(15,2),
    ];
});

$factory->define(App\Item::class, function (Faker\Generator $faker) {
    return [
         'quantity' => $faker->numberBetween(1,200),
    ];
});