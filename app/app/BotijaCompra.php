<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BotijaCompra extends Model
{
    protected $fillable = [
        'botijasid',
        'comprasid',
        'preco_compra',
        'quantidade',
        'tem_tara',
    ];

    protected $table = 'botijas_compras';
}
