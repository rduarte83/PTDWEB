<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBotijasMaquinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('botijas_maquinas', function (Blueprint $table) {
            $table->unsignedInteger('botijasid');
            $table->unsignedInteger('maquinasid');
            $table->integer('stock');
            $table->integer('num_reservas');
            $table->primary(['botijasid','maquinasid']);
            $table->foreign('botijasid')->references('id')->on('botijas');
            $table->foreign('maquinasid')->references('id')->on('maquinas');
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
        Schema::dropIfExists('botijas_maquinas');
    }
}
