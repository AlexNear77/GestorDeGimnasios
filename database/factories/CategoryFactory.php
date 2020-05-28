<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Categoria;
use Faker\Generator as Faker;

$factory->define(Categoria::class, function (Faker $faker) {
    $title = $faker->sentence(1);
    return [
        'nombre' => $faker->randomElement(['Suplementos','Bebidas','Ropa','Accesorios']),
    ];
});
