<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maquina extends Model
{
    protected  $fillable = [
        'id',
        'nome',
        'online',
        'lat',
        'long',
        'created_at',
        'updated_at'
    ];

    protected $table = "maquinas";
}
