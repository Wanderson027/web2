<?php

use Illuminate\Database\Seeder;
use App\Entity\Peca;

class PecaTableSeeder extends Seeder
{
   
    public function run()
    {
       
        factory(Peca::class, 5)->create();

    }
}
