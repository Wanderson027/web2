<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id', 'tipo', 'valor', 'descricao'
      ];
    protected $table = 'servicos'; 
}
