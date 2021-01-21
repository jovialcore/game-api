<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;

use App\gameplays;

$factory->define(gameplays::class, function (Faker $faker) {
    return [
        'players_id' => rand(1, 100),
        'games_id' => rand(1, 5),
        'gameplaysNofTimes' => rand(20, 70),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
