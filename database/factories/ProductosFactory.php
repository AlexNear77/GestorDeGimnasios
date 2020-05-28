<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Producto;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
    $title = $faker->sentence(3);
    return [
        'description' => $title,
        'category_id' => rand(1,4),
        'gym_id' => rand(1,2),
        'stock' => rand(1,200),
        'buy' => rand(1,1000),
        'sale' => rand(1,1000),
        'body' => $faker->text(17),
    ];
});
