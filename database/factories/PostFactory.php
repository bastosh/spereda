<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'slug' => $faker->slug,
        'img' => $faker->randomElement(['hub.png', 'jeux.jpg', 'apostrophe.jpg']),
        'body' => $faker->paragraphs(5, true),
        'user_id' => function() {
            return factory(App\User::class)->create()->id;
        },
        'category_id' => $faker->randomElement([1, 2, 3]),
        'created_at' => $faker->dateTimeBetween('-4months'),
    ];
});
