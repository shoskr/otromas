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
        $psaR = 0;
        $tipo;
        $id;
        $pase;
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
                    $_SESSION['tipo'] = 1;
                    return \View::make('formUTP');
                    break;
                case 2:
                    session_start();
                    $_SESSION['user'] = $user;
                    $_SESSION['tipo'] = 2;
                    return \View::make('formUTP');
                case 3:
                    session_start();

                    $_SESSION['user'] = $user;
                    $_SESSION['tipo'] = 3;
                    return \View::make('formUTP');
                case 4:
                    session_start();
                    $_SESSION['tipo'] = 4;
                    $_SESSION['user'] = $user;
                    return \View::make('formUTP');
                    break;
            }
        } else {
            return redirect()->back();
        }
    }

//
}
