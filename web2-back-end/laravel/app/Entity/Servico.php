<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected   $filable = ['curso', 'semestre', 'turno', 'funcionario'];

    protected $guarded = ['id', 'created_at', 'updated_at']; //Fields that will be automatically filled

    protected $hidden = ['created_at', 'updated_at', 'password', 'remmember_token']; //Filds that will be hidden to user

    protected $table = 'servico';
}
