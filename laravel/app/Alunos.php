<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    protected $filable = ['id','nome', 'email', 'telefone']; //coloca o nome das colunas que vc quer que , espelho da nossa entidade. equivale ao select * from
  
    protected $table = 'alunos'; //pra especificar a tabela que vc quer
}
