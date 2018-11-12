<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Inserts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("
            INSERT INTO roles (id, role) VALUES (1, 'Administrador'), (2, 'Utilizador');
            INSERT INTO pagamentos (id, meio) VALUES (1, 'Paypal'), (2, 'MBWay'), (3, 'Cartão Pré-pago');
        
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
