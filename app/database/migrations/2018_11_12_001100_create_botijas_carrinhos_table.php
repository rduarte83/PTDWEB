<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBotijasCarrinhosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('botijas_carrinhos', function (Blueprint $table) {
            $table->unsignedInteger('botijasid');
            $table->unsignedInteger('carrinhosid');
            $table->integer('quantidade');
            $table->boolean('tem_tara');
            $table->primary(['botijasid','carrinhosid']);
            $table->foreign('botijasid')->references('id')->on('botijas');
            $table->foreign('carrinhosid')->references('id')->on('carrinhos');
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
        Schema::dropIfExists('botijas_carrinhos');
    }
}
