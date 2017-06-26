<?php

namespace colegio;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model {

    protected $table = "alumno";
    protected $fillable=['rut','nombre_alumno','fecha_nacimiento','curso','direccion','telefono','estado'];

//
}
