<?php

use Illuminate\Database\Seeder;
use App\Entity\Servico;

class ServicoTableSeeder extends Seeder
{
    public function run()
    {
        factory(Servico:: class, 5)->create();
    }
}
