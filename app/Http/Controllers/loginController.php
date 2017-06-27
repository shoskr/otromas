<?php

namespace colegio\Http\Controllers;

use Illuminate\Http\Request;
use colegio\Usuario as Usuario;
use colegio\Alumno_usuario as Alum;

class loginController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $Usuario = usuario::all();

        $user = $request->username;
        $psaR;
        $tipo;
        $id;
        foreach ($Usuario as $us) {
            if ($us->username == $user) {
                $pasR = $us->password;
                $tipo = $us->perfil;
                $id = $us->id_usuario;
            }
        }
      
        if (password_verify($request->password, $pasR)) {
            switch ($tipo) {
                case 1:
                    session_start();
                    $_SESSION['user'] = $user;
                    $_SESSION['id'] = $id;
                    return \View::make('AlumFrom');
                    break;
                case 2:
                    session_start();
                    $_SESSION['user'] = $user;
                    return \View::make('formSecretaria');
                case 3:
                    session_start();
                    Alert::info('Bienbenido','info' );
                    $_SESSION['user'] = $user;
                    return \View::make('formUTP', compact($_SESSION['user']));
                case 4:
                    session_start();
                    $_SESSION['user'] = $user;

                    break;
            }
        } else {
            echo 'no pasa';
        }
    }

//
}
