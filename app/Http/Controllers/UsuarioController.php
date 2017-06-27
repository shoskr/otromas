<?php

namespace colegio\Http\Controllers;

use Illuminate\Http\Request;
use colegio\Usuario as Usuario;
use colegio\Alumno_usuario as alumno;

class UsuarioController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        return view('UTP');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {


        $usuario = new Usuario;
        $usuario->username = $request->username;
        $usuario->password = password_hash($request->password, PASSWORD_DEFAULT);
        $usuario->perfil = $request->perfil;

        $usuario->save();
        if ($request->perfil == 1) {
            $usu = usuario::all()->last();
            $AlumUs = new alumno;
            $AlumUs->Alumno_rut = $request->rut;
            $AlumUs->usuario_id_usuario = $usu->id_usuario;
            $AlumUs->save();
            session_start();
            return view('formUTP');
        } else {
            session_start();
            return view('formUTP');
        }
    }

    public function entrar(Request $request) {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {

//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
//
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
//
    }

}
