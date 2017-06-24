<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfesorTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profesor', function(Blueprint $table)
		{
			$table->string('rut', 9)->primary();
			$table->string('nombre_profesor', 100);
			$table->date('fecha_contrato');
			$table->string('asignatura', 45);
			$table->integer('valor_tutoria');
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
		Schema::drop('profesor');
	}

}
