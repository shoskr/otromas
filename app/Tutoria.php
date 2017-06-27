<?php

namespace colegio;

use Illuminate\Database\Eloquent\Model;

class Tutoria extends Model {

    protected $table = 'tutoria';
    protected $fillable = ['fecha_tutoria', 'estado', 'Alumno_rut', 'Profesor_rut'];
    protected $guarded=['id_tutoria'];

//
}
