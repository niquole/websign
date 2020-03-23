<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(4),
        'user_id' => $faker->numberBetween(1, 30),
        'description' => $faker->sentence(20),
        'image' => 'https://cdn.pixabay.com/photo/2017/09/24/14/01/alpaca-2781920_960_720.jpg'
    ];
});
