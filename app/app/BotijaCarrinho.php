<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BotijaCarrinho extends Model
{
    protected $fillable = [
        'botijaid',
        'carrinhoid',
        'quantidade'
    ];

    protected $table = "botijas_carrinhos";
}