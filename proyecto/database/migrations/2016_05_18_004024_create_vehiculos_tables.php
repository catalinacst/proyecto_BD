<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiculosTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vehiculos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('propietario_id')->unsigned()->default(0);
			$table->foreign('propietario_id')->references('id')->on('propietarios')->onDelete('cascade');
			$table->integer('modelo_id')->unsigned()->default(0);
			$table->foreign('modelo_id')->references('id')->on('modelos')->onDelete('cascade');
			$table->date('fecha_matricula');
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
		Schema::drop('vehiculos');
	}

}
