<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3),
        'user_id' => $faker->numberBetween(1, 30),
        'description' => $faker->sentence(5),
        'category_id' => $faker->numberBetween(1, 6),
        'image' => 'https://source.unsplash.com/300x225/?cat'
    ];
});
