<?php

namespace colegio;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model {

    protected $table = 'usuario';
    protected $fillable=['username','password','perfil'];
    protected $guarded=['id_usuario'];

//
}
