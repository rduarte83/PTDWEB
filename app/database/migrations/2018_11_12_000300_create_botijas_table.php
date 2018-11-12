<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBotijasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('botijas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('tipo');
            $table->string('marca');
            $table->string('descricao')->nullable();
            $table->decimal('preco');
            $table->decimal('preco_tararo');
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
        Schema::dropIfExists('botijas');
    }
}
