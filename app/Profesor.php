<?php

namespace colegio;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model {

    protected $table = 'profesor';
    protected $fillable=['rut','nombre_profesor','fecha_contrato','asignatura','valor_tutoria','estado'];

//
}
