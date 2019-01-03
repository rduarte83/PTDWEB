<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorito extends Model
{
    protected $fillable = [
        'utilizadoresid',
        'botijasid',
        'favorito'
    ];

    protected $table = 'utilizadores_botijas';
}
