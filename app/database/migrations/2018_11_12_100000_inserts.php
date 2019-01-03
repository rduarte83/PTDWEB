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
            INSERT INTO utilizadores (nome,email,password)  VALUES ('Rui','rui@gmail.com','rui');
            INSERT INTO utilizadores (nome,email,password)  VALUES ('Joao','joao@gmail.com','joao');
            INSERT INTO botijas VALUES (DEFAULT,'Botija X','propano','Galp','Uma botija X',50.00,5.00,'a');
            INSERT INTO botijas VALUES (DEFAULT,'Botija Z','butano','BP','Uma botija Z',100.00,10.00,'b');
            
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
