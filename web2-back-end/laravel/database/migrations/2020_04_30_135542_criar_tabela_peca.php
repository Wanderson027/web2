<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaPeca extends Migration
{
    
    public function up()
    {
        Schema::create('peca', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->Integer('idade')->nullable();
            $table->string('grauGraduacao')->nullable();
            $table->string('email')->nullable();
            $table->string('endereco')->nullable();
            $table->string('telefoneCelular')->nullable();
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('peca');
    }
}
