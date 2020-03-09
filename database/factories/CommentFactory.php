<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1, 30),
        'post_id' => $faker->numberBetween(1, 80),
        'content' => $faker->paragraph(3)
    ];
});
