<?php

use Illuminate\Database\Seeder;
use App\Entity\Carro;

class CarroTableSeeder extends Seeder
{
    public function run()
    {
        factory(Carro:: class, 5)->create();
    }
}
