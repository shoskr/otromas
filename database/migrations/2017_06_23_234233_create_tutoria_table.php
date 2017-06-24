<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTutoriaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tutoria', function(Blueprint $table)
		{
			$table->integer('id_tutoria', true);
			$table->date('fecha_tutoria');
			$table->string('estado', 45);
			$table->string('Alumno_rut', 9)->index('fk_tutoria_Alumno_idx');
			$table->string('Profesor_rut', 9)->index('fk_tutoria_Profesor1_idx');
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
		Schema::drop('tutoria');
	}

}
