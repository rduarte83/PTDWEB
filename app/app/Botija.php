<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Botija extends Model
{
    protected $fillable = [
        'nome',
        'tipo',
        'marca',
        'descricao',
        'preco',
        'imagem'
    ];
}
