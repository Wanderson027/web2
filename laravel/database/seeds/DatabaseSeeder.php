<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AlunosTableSeeder::class);
        // $this->call(ProfessorTableSeeder::class);
        // $this->call(TurmaTableSeeder::class);
        // $this->call(UserSeeder::class);
    }
}
