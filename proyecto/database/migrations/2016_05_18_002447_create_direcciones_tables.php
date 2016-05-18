<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDireccionesTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('direcciones', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('carrera')->default('');
			$table->integer('kilometro')->default(0);
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
		Schema::drop('direcciones');
	}

}
