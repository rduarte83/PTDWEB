<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrinhosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrinhos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('utilizador');
            $table->unsignedInteger('meio_pagamento')->nullable();
            $table->integer('qtd_tara')->default(0);
            $table->foreign('meio_pagamento')->references('id')->on('pagamentos');
            $table->foreign('utilizador')->references('id')->on('utilizadores');
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
        Schema::dropIfExists('carrinhos');
    }
}
