<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Entity\Peca;
use Faker\Generator as Faker;

$factory->define(Peca::class, function (Faker $faker) {
    return [
        'nome' =>$faker->name,
        'idade'=>$faker->unique()->numberBetween(23, 70),
        'grauGraduacao' =>$faker->randomElement($array = array (
            'Bacharel', 'Licenciado', 'Mestre', 'Doutor', 'Especialista')),
            
        'email' =>$faker->unique()->freeEmail,
        'endereco' =>$faker->address,
        'telefoneCelular' =>$faker->cellphonenumber
    ];
});
