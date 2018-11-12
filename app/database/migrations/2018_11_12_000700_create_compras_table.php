<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('utilizador');
            $table->dateTime('data');
            $table->decimal('valor');
            $table->unsignedInteger('meio_pagamento');
            $table->string('qr');
            $table->integer('pin');
            $table->dateTime('data_recolha')->nullable();
            $table->foreign('utilizador')->references('id')->on('utilizadores');
            $table->foreign('meio_pagamento')->references('id')->on('pagamentos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compras');
    }
}
