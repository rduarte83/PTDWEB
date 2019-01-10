<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BotijasMaquinas extends Model
{
    protected  $fillable = [
        'botijasid',
        'maquinasid',
        'stock',
        'num_reservas',
        'created_at',
        'updated_at'
    ];

    protected $table = "botijas_maquinas";
}
