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
            $table->string('nome');
            $table->string('email')->unique();
            $table->text('password');
            $table->string('morada')->nullable();
            $table->char('codigo_postal', 8)->nullable();
            $table->string('localidade')->nullable();
            $table->char('nif', 9)->unique()->nullable();
            //$table->unsignedInteger('role');
            $table->unsignedInteger('role')->default('2');
            $table->dateTime('data_registo')->default(now());
            $table->dateTime('data_login')->nullable();
            $table->integer('num_cartao')->unique()->nullable();
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
