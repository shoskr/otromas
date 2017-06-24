<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAlumnoUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('alumno_usuario', function(Blueprint $table)
		{
			$table->foreign('Alumno_rut', 'fk_Alumno_has_usuario_Alumno1')->references('rut')->on('alumno')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('usuario_id_usuario', 'fk_Alumno_has_usuario_usuario1')->references('id_usuario')->on('usuario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('alumno_usuario', function(Blueprint $table)
		{
			$table->dropForeign('fk_Alumno_has_usuario_Alumno1');
			$table->dropForeign('fk_Alumno_has_usuario_usuario1');
		});
	}

}
