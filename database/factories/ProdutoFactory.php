<?php

use Faker\Generator as Faker;

$factory->define(\App\Produto::class, function (Faker $faker) {
    return [
        'nome' => $faker->name(),
        'descricao' => $faker->text(100),
        'idProdutoCategoria' => function () {
            return App\ProdutoCategoria::query()->find(rand(1,100));
        },
    ];
});
