<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtletasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atletas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('sexo');
            $table->char('rg');
            $table->char('cpf');
            $table->char('cnh');
            $table->char('endereco');
            $table->char('email');
            $table->char('sangue');
            $table->string('plano');
            $table->integer('clube_id')->unsigned();
            $table->foreign('clube_id')->references('id')->on('clubes');
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
        Schema::dropIfExists('atletas');
    }
}
