<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropietariosTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('propietarios', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre')->default('');
			$table->string('apellidos')->default('');
			$table->string('ciudad')->default('');
			$table->string('direccion')->default('');
			$table->date('fecha_nac');
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
		Schema::drop('propietarios');
	}

}
