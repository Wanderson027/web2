<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peca extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id', 'nome', 'fabricante', 'quantidade'
      ];
    protected $table = 'pecas'; 
}
