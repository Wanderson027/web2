<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'idvendedor', 'nome', 'cpf', 'funcao'
      ];
    protected $hidden = ['password','remmember_token'];
    protected $table = 'vendedores'; 
}
