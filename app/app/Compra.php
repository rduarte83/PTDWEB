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
        'pin',
        'local_recolha',
        'data_recolha'
    ];
}