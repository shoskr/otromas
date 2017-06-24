<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlumnoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alumno', function(Blueprint $table)
		{
			$table->string('rut', 9)->primary();
			$table->string('nombre_alumno', 100);
			$table->date('fecha_nacimiento');
			$table->string('curso', 45);
			$table->string('direccionl', 100);
			$table->integer('telefono');
			$table->boolean('estado');
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
		Schema::drop('alumno');
	}

}
