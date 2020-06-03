<?php

use Illuminate\Database\Seeder;
class VendedoresTableSeeder extends Seeder
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

        factory(\App\Models\Vendedor::class, 20)->create();
        
    }
}
