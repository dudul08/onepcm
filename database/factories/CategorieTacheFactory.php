<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CategorieTache;
use Faker\Generator as Faker;

$factory->define(CategorieTache::class, function (Faker $faker) {
    return [
        'libelle' => $faker->title

    ];
});
