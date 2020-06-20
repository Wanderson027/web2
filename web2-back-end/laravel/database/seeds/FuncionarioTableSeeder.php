<?php

namespace App\Models\Funcionario;

use Illuminate\Database\Seeder;
class FuncionarioTableSeeder extends Seeder
{
   
    public function run()
    {
        /*Alunos::create([
            'nome' => 'Maria das Dores'
            ]);
        */

        factory(\App\Models\Funcionario::class, 20)->create();
        
    }
}
