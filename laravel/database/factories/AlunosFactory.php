<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Alunos;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Alunos::class, function (Faker $faker) {
    return [
        'nome' =>$faker->name,
        'email' => $faker->unique()->safeEmail,
        'telefone' =>$faker->tollFreePhoneNumber,


    ];
});
