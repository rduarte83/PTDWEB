<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtilizadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilizadores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('nome');
            $table->string('morada');
            $table->string('codigo_postal');
            $table->string('localidade');
            $table->char('nif', 9)->unique();
            $table->char('cc', 11)->unique();
            $table->char('genero', 1);
            $table->date('data_nascimento');
            $table->char('contacto', 13)->nullable();
            $table->unsignedInteger('role');
            $table->dateTime('data_registo')->default(now());
            $table->dateTime('data_login')->nullable();
            $table->integer('num_cartao')->unique();
            $table->foreign('role')->references('id')->on('roles');
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
        Schema::dropIfExists('utilizadores');
    }
}
