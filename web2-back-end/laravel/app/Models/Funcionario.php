<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id', 'nome', 'cpf', 'funcao'
      ];
    protected $hidden = ['password','remmember_token'];
    protected $table = 'funcionarios'; 
}
