<?php

namespace colegio;

use Illuminate\Database\Eloquent\Model;

class Alumno_usuario extends Model
{
   
    protected $table = 'alumno_usuario';
     protected $fillable=['Alumno_rut','usuario_id_usuario'];
//
}
