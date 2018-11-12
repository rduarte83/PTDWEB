<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtilizadoresBotijasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilizadores_botijas', function (Blueprint $table) {
            $table->unsignedInteger('utilizadoresid');
            $table->unsignedInteger('botijasid');
            $table->boolean('favorito');
            $table->primary(['utilizadoresid', 'botijasid']);
            $table->foreign('utilizadoresid')->references('id')->on('utilizadores');
            $table->foreign('botijasid')->references('id')->on('botijas');
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
        Schema::dropIfExists('roles_utilizadores_botijas');
    }
}
