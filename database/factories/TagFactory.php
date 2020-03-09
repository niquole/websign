<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tag;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Model;

$factory->define(Tag::class, function (Faker $faker) {
    return [
        'title' => $faker->word(),
    ];
});
