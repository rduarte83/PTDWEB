<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BotijaCarrinho extends Model
{
    protected $fillable = [
        'botijasid',
        'carrinhosid',
        'quantidade',
        'tem_tara'
    ];

    protected $primaryKey = "botijasid";

    protected $table = "botijas_carrinhos";
}
