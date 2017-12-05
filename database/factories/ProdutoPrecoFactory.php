<?php

use Faker\Generator as Faker;

$factory->define(\App\ProdutoPreco::class, function (Faker $faker) {
    $v =  $faker->randomFloat(2, 0, 10000);
    $dInicio = new \DateTime();
    $dFim = new \DateTime();
    $intervalo = new DateInterval('P10D');
    $dFim = $dFim->add($intervalo);
    return [
        //
        'valorDe' => $v,
        'valorPor' => $v - ($v*0.01),
        'idProduto' => function () {
            return App\Produto::query()->find(rand(1,150));
        },
        'inicio' => $dInicio,
        'fim' => $dFim
    ];
});
