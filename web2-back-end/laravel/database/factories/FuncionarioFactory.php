<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Entity\Funcionario;

$factory->define(Funcionario::class, function (Faker $faker) {
    return [
        'nome' =>$faker->name,
        'cpf' =>$faker->cpf,
        'rg' =>$faker->rg,
        'idade' =>$faker->unique()->numberBetween(16, 70),
        'email' =>$faker->unique()->freeEmail,
        'endereco' =>$faker->address,
        'telefoneCelular' =>$faker->cellphonenumber,
    ];
});
