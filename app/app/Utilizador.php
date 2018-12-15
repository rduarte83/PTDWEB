<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utilizador extends Model
{
    //
    protected $fillable = [
        'nome',
        'email',
        'password',

    ];

    protected $table = 'utilizadores';

}
