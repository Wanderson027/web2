<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Funcionario;
use App\Models;
use Faker\Generator as Faker;

$factory->define(Funcionario::class, function (Faker $faker) {
    return [
        'id'=>  $faker->id,
        'nome' =>$faker->name,
        'cpf' => $faker->ean8, 
        'funcao' =>$faker->jobTitle,
    ];
});
