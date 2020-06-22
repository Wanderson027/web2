<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loja extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id', 'nome', 'endereco', 'cnpj'
      ];
    protected $table = 'lojas'; 
}
