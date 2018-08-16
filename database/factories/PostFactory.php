<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'my_id' => $faker->numberBetween(1000,100000),
        'text' => $faker->word(5),
    ];
});
