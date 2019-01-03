<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected  $fillable = [
        'nome',
        'tipo',
        'marca',
        'descricao',
        'preco',
        'preco_tara',
        'imagem'
    ];

    protected $table = "botijas";
}
