<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1, 30),
        'description' => $faker->sentence(20),
        'image' => 'https://cdn.pixabay.com/photo/2017/09/24/14/01/alpaca-2781920_960_720.jpg'
    ];
});
