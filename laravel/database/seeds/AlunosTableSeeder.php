<?php

use Illuminate\Database\Seeder;
use App\Alunos;
class AlunosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // equivale ao insert into                          cmd: php artisan db:seed =  roda todos seed
            // Alunos::create([
            //     'nome' => 'Maria das Dores',
            //     'email'=> 'ediclesse@hotmail.com',
            //     'telefone'=> '6196952721'
            //     ]);
            

        factory(\App\Alunos::class, 20)->create();          //cria com a factory automatica, chama a classe que quer criar, o numero que quer criar e o metodo de criar
        
    }
}
