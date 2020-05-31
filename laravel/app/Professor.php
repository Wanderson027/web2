<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $filable = ['id','nome', 'email', 'telefone']; //coloca o nome das colunas que vc quer que , espelho da nossa entidade.
  
    protected $table = 'professor'; //pra especificar a tabela que vc quer
}
