<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfraccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infracciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('propietario_id')->unsigned()->default(0);
            $table->foreign('propietario_id')->references('id')->on('propietarios')->onDelete('cascade');
            $table->integer('agente_id')->unsigned()->default(0);
            $table->foreign('agente_id')->references('id')->on('agentes')->onDelete('cascade');
            $table->integer('direccion_id')->unsigned()->default(0);
            $table->foreign('direccion_id')->references('id')->on('direcciones')->onDelete('cascade');
            $table->string('articulo')->default('');
            $table->date('fecha');
            $table->integer('valor_total')->default(0);
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
        Schema::drop('infracciones');
    }
}
