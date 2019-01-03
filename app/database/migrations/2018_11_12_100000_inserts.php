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
            INSERT INTO utilizadores (nome,email,password)  VALUES ('Rui Duarte','rui@gmail.com','rui');
            INSERT INTO utilizadores (nome,email,password)  VALUES ('João Novo','joao@gmail.com','joao');
            INSERT INTO utilizadores (nome,email,password)  VALUES ('António Pinho','antonio@gmail.com','antonio');
            INSERT INTO botijas VALUES (DEFAULT,'Propano 11','Propano','Galp','Propano 11', 11, 50.00,5.00,'images/garrafas/propano-11kg.png');
            INSERT INTO botijas VALUES (DEFAULT,'Butano 13','Butano','Galp','Butano 13', 13, 100.00,10.00,'images/garrafas/butano-13kg.png');
            
            INSERT INTO utilizadores_botijas(utilizadoresid, botijasid, favorito) VALUES (1, 1, true);
            INSERT INTO utilizadores_botijas(utilizadoresid, botijasid, favorito) VALUES (1, 2, true);
        
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
