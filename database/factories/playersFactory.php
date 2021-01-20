<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\players;
use Faker\Generator as Faker;

$factory->define(players::class, function (Faker $faker) {
    return [
        "name" => $faker->firstName,
        "nickName" => $faker->userName,
        "password" => bcrypt('123456'),
        "email"=>$faker->unique()->safeEmail,
        "email_verified_at"=> now(),
        "remember_token" => Str::random(10),
        "lastLogin" => now()->toDateTimeString(),
         "created_at" => now(),
        "updated_at" => now(),

    ];
});
