<?php

use Illuminate\Database\Seeder;
class FuncionarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Alunos::create([
            'nome' => 'Maria das Dores'
            ]);
        */

        factory(\App\Models\Funcinario::class, 20)->create();
        
    }
}
