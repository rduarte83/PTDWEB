<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    //
    protected $fillable = [
        "meio",
    ];

    protected $table = "pagamentos";
}
