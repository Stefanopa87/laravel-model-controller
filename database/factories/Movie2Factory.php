<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie2;

use Faker\Generator as Faker;

$factory->define(Movie2::class, function (Faker $faker) {
    return [
        'title' => $faker -> word,
        'original_title' => $faker -> word,
        'date' => $faker -> date,
        'nationality' => $faker -> word,
        'vote' => $faker -> numberBetween(0, 10),

    ];
});
