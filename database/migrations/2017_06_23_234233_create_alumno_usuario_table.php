<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlumnoUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alumno_usuario', function(Blueprint $table)
		{
			$table->string('Alumno_rut', 9)->index('fk_Alumno_has_usuario_Alumno1_idx');
			$table->integer('usuario_id_usuario')->index('fk_Alumno_has_usuario_usuario1_idx');
			$table->primary(['Alumno_rut','usuario_id_usuario']);
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
		Schema::drop('alumno_usuario');
	}

}
