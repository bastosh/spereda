<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'message' => $faker->sentence,
        'user_id' => $faker->randomElement([1,2,3,4,5]),
        'post_id' => $faker->randomElement([1,2,3,4,5,6,7,8,9,10])
    ];
});
