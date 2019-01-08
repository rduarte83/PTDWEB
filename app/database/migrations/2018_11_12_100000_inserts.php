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
            
            INSERT INTO botijas VALUES (DEFAULT,'Galp P 11Kg','Propano','Galp','Galp Propano 11Kg', 11, 24.90,'images/garrafas/galp-propano-11kg.png');
            INSERT INTO botijas VALUES (DEFAULT,'Galp B 13Kg','Butano','Galp','Galp Butano 13Kg', 13, 29.90,'images/garrafas/galp-butano-13kg.png');
            INSERT INTO botijas VALUES (DEFAULT,'OZ P 11Kg','Propano','OZ','OZ Propano 11Kg', 11, 22.90,'images/garrafas/oz_propano_galo_verde_s.png');
            INSERT INTO botijas VALUES (DEFAULT,'OZ B 13Kg','Butano','OZ','OZ Butano 13Kg', 13, 29.90,'images/garrafas/oz_butano_coracao_azul_s.png');
            INSERT INTO botijas VALUES (DEFAULT,'Repsol P 11Kg','Propano','Repsol','Repsol Propano 11Kg', 11, 22.90,'images/garrafas/repsol_propano_11.png');
            INSERT INTO botijas VALUES (DEFAULT,'Repsol B 13Kg','Butano','Repsol','Repsol Butano 13Kg', 13, 31.90,'images/garrafas/repsol_butano_13kg.png');
            INSERT INTO botijas VALUES (DEFAULT,'Rubis P 11Kg','Propano','Rubis','Rubis Propano 11Kg', 11, 26.90,'images/garrafas/rubis_propano_ft.png');
            INSERT INTO botijas VALUES (DEFAULT,'Rubis B 13Kg','Butano','Rubis','Rubis Butano 13Kg', 13, 34.90,'images/garrafas/rubis_butano_ft.png');
      
            
            INSERT INTO utilizadores_botijas(utilizadoresid, botijasid, favorito) VALUES (1, 1, true);
            INSERT INTO utilizadores_botijas(utilizadoresid, botijasid, favorito) VALUES (1, 2, true);
            INSERT INTO utilizadores_botijas(utilizadoresid, botijasid, favorito) VALUES (2, 1, true);
            
            INSERT INTO compras (id, utilizador, data, valor, meio_pagamento, qr, pin, local_recolha, data_recolha) VALUES (DEFAULT, 1, '2019-01-03 20:58:12', 1000.00, 1, 'images/qrcodes/qrcode.png', 00000000, 'Aveiro', '2019-01-03 20:58:47');
            INSERT INTO compras (id, utilizador, data, valor, meio_pagamento, qr, pin, local_recolha,data_recolha) VALUES (DEFAULT, 1, '2019-01-03 20:58:12', 800.00, 1, 'images/qrcodes/qrcode.png', 11111111, 'Aveiro', '2019-01-03 20:58:47');
            INSERT INTO compras (id, utilizador, data, valor, meio_pagamento, qr, pin, local_recolha,data_recolha) VALUES (DEFAULT, 2, '2019-01-03 20:58:12', 1000.00, 1, '1', 1, 'Aveiro', '2019-01-03 20:58:47');
            
            INSERT INTO botijas_compras (botijasid, comprasid, preco_compra, quantidade) VALUES (1, 1, 24.90, 2);
            INSERT INTO botijas_compras (botijasid, comprasid, preco_compra, quantidade) VALUES (2, 1, 29.90, 1);
            INSERT INTO botijas_compras (botijasid, comprasid, preco_compra, quantidade) VALUES (1, 2, 24.90, 3);
            INSERT INTO botijas_compras (botijasid, comprasid, preco_compra, quantidade) VALUES (2, 2, 29.90, 2);
            INSERT INTO botijas_compras (botijasid, comprasid, preco_compra, quantidade) VALUES (1, 3, 24.90, 1);
            
            INSERT INTO carrinhos VALUES (DEFAULT,1, 1, 1);
            
            INSERT INTO botijas_carrinhos VALUES (1, 1, 1);
            INSERT INTO botijas_carrinhos VALUES (2, 1, 4);
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
