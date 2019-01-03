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
            INSERT INTO utilizadores_botijas(utilizadoresid, botijasid, favorito) VALUES (2, 1, true);
            
            INSERT INTO compras (id, utilizador, data, valor, meio_pagamento, qr, pin, local_recolha, data_recolha) VALUES (DEFAULT, 1, '2019-01-03 20:58:12', 1000.00, 1, '1', 1, 'Aveiro', '2019-01-03 20:58:47');
            INSERT INTO compras (id, utilizador, data, valor, meio_pagamento, qr, pin, local_recolha,data_recolha) VALUES (DEFAULT, 1, '2019-01-03 20:58:12', 800.00, 1, '1', 1, 'Aveiro', '2019-01-03 20:58:47');
            INSERT INTO compras (id, utilizador, data, valor, meio_pagamento, qr, pin, local_recolha,data_recolha) VALUES (DEFAULT, 2, '2019-01-03 20:58:12', 1000.00, 1, '1', 1, 'Aveiro', '2019-01-03 20:58:47');
            
            INSERT INTO botijas_compras (botijasid, comprasid, preco_compra, quantidade, tem_tara) VALUES (1, 1, 200.00, 2, false);
            INSERT INTO botijas_compras (botijasid, comprasid, preco_compra, quantidade, tem_tara) VALUES (2, 1, 150.00, 1, false);
            INSERT INTO botijas_compras (botijasid, comprasid, preco_compra, quantidade, tem_tara) VALUES (1, 2, 150.00, 3, true);
            INSERT INTO botijas_compras (botijasid, comprasid, preco_compra, quantidade, tem_tara) VALUES (2, 2, 100.00, 2, true);
            INSERT INTO botijas_compras (botijasid, comprasid, preco_compra, quantidade, tem_tara) VALUES (1, 3, 500.00, 1, false);
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
