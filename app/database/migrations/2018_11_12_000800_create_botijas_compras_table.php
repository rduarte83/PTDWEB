<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBotijasComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('botijas_compras', function (Blueprint $table) {
            $table->unsignedInteger('botijasid');
            $table->unsignedInteger('comprasid');
            $table->decimal('preco_compra');
            $table->integer('quantidade');
            $table->boolean('tem_tara');
            $table->primary(['botijasid','comprasid']);
            $table->foreign('botijasid')->references('id')->on('botijas');
            $table->foreign('comprasid')->references('id')->on('compras');
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
        Schema::dropIfExists('botijas_compras');
    }
}
