<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Entity\Servico;

$factory->define(Servico::class, function (Faker $faker) {
    return [
        'Servico' =>$faker->randomElement($array = array (
            'Chevette','Opala','Maveric',
            'Gol', 'Golf', 'Uno',
            'fiat147', 'Celta', 'omega', 'Palio',
            'Fisioterapia', 'Nutricao', 'Fox', 'BMW', 'Loste',
            'KyaSou', 'Piccanto')),

        'Montadora' =>$faker->randomElement($array = array (
            'VOlks', 'Fiat', 'Renalt', 'Chevrolett', 'Ford', 'Kya', 'Pegeout', 'BMW')),

        'Potencia' =>$faker->randomElement($array = array (
            '1.0', '2.0', '4.1')),

        'Cor' =>$faker->randomElement($array = array (
                'Cinza', 'verde', 'amarelo', 'Azul')),
    ];
});
