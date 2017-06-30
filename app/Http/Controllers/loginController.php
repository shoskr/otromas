<?php

namespace colegio\Http\Controllers;

use Illuminate\Http\Request;
use colegio\Usuario as Usuario;
use colegio\Alumno_usuario as Alum;
use colegio\Tutoria as Tutoria;

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
                $pasa = 'ok';
            }
        }
        if ($pasa == 'ok') {
            if (password_verify($request->password, $pasR)) {
                switch ($tipo) {
                    case 1:
                        session_start();
                        $_SESSION['user'] = $user;
                        $_SESSION['id'] = $id;
                        $_SESSION['tipo'] = 1;
                        $us = Alum::all()->where('usuario_id_usuario', $id)->first();

                        $_SESSION['rut'] = $us->Alumno_rut;
                        $fecha = date('Y-m-d');

                        $nfecha = strtotime('+2 day', strtotime($fecha));
                        $nfecha = date('Y-m-d', $nfecha);
                        $Tuto = Tutoria::all()->where('Alumno_rut', $us->Alumno_rut)->where('fecha_tutoria', $nfecha);

                        return \View::make('Alumnos', compact('Tuto'));
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
        }else{
            return redirect()->back();
        }
    }

//
}
