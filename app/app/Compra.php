<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $fillable = [
        'id',
        'utilizador',
        'data',
        'valor',
        'meio_pagamento',
        'qr',
        'qtd_tara',
        'pin',
        'local_recolha'
    ];
}
