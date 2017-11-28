<?php

use Faker\Generator as Faker;

$factory->define(App\ProdutoCategoria::class, function (Faker $faker) {
    return [
        'nome' => $faker->company()
    ];
});
