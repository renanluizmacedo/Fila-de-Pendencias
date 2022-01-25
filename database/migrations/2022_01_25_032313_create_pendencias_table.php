<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendencias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao');
            $table->string('prazo');
            $table->string('data');
            $table->string('horario');
            $table->integer('id_responsavel')->unsigned()->
                nullable();
            $table->foreign('id_responsavel')->references('id')
                ->on('users');
            $table->integer('id_origem')->unsigned()->
            nullable();
            $table->foreign('id_origem')->references('id')
            ->on('users');                
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
        Schema::dropIfExists('pendencias');
    }
}
