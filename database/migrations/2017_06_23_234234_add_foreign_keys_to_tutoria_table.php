<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTutoriaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tutoria', function(Blueprint $table)
		{
			$table->foreign('Alumno_rut', 'fk_tutoria_Alumno')->references('rut')->on('alumno')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('Profesor_rut', 'fk_tutoria_Profesor1')->references('rut')->on('profesor')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tutoria', function(Blueprint $table)
		{
			$table->dropForeign('fk_tutoria_Alumno');
			$table->dropForeign('fk_tutoria_Profesor1');
		});
	}

}
