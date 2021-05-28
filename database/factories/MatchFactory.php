<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Match;
use Faker\Generator as Faker;

$factory->define(Match::class, function (Faker $faker) {
    return [
        'team1' => $faker -> word,
        'team2' => $faker -> word,
        'point1' => $faker -> numberBetween(1, 5),
        'point2' => $faker -> numberBetween(1, 5),
        'result' => $faker -> boolean
    ];
});
