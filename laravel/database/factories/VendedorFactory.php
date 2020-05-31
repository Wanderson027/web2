<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Vendedor;
use App\Models;
use Faker\Generator as Faker;

$factory->define(Vendedor::class, function (Faker $faker) {
    return [
        'idvendedor'=>  $faker->id,
        'nome' =>$faker->name,
        'cpf' => $faker->unique()->safeEmail,
        'funcao' =>$faker->tollFreePhoneNumber,
    ];
});
