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

$factory->define(\App\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'nickname' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'birthdate' => $faker->dateTimeThisCentury->format('Y-m-d'),
        'gender' => $faker->title,
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'group_id' => rand(0,4),
        'group' => str_random(2),
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(100),
    ];
});
