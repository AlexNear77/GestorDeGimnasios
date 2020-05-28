<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Gym;
use Faker\Generator as Faker;

$factory->define(Gym::class, function (Faker $faker) {
    $title = $faker->sentence(2);
    return [
        'nombre' => $title,
        'category_id' => rand(1,4),
        'img' => $faker->imageUrl($width = 500, $height = 500),
        'ubicacion' => $faker->text(17),
        'body' => $faker->text(7),
    ];
});
