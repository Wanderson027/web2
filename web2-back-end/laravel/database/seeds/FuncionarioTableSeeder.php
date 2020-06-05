<?php

use Illuminate\Database\Seeder;
use App\Entity\Funcionario;

class FuncionarioTableSeeder extends Seeder
{
    public function run()
    {
        factory(Funcionario::class, 5)->create();
    }
}