<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id', 'nome', 'marca', 'cor'
      ];
    protected $table = 'carros'; 
}
