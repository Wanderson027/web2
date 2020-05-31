<?php

use Illuminate\Database\Seeder;

class ProfessorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Professor::create([
            'nome' => 'Girafales',
            'email'=> 'Girafales@hotmail.com',
            'telefone'=> '71717171'
            ]);
    }
}
