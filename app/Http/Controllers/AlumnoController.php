<?php

//https://laravelcollective.com/docs/5.4/html

namespace colegio\Http\Controllers;

use Illuminate\Http\Request;
use colegio\Alumno as Alumno;

class AlumnoController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        function agregar_dv($_rol) {
            while ($_rol[0] == "0") {
                $_rol = substr($_rol, 1);
            }
            $factor = 2;
            $suma = 0;
            for ($i = strlen($_rol) - 1; $i >= 0; $i--) {
                $suma += $factor * $_rol[$i];
                $factor = $factor % 7 == 0 ? 2 : $factor + 1;
            }
            $dv = 11 - $suma % 11;
            /* Por alguna razón me daba que 11 % 11 = 11. Esto lo resuelve. */
            $dv = $dv == 11 ? 0 : ($dv == 10 ? "K" : $dv);
            return $dv;
        }

        $alumno = new Alumno;
        $alumno->rut = $request->rut;

        $al = agregar_dv($request->rut);
        $dv = $request->dv;
        $alumno->nombre_alumno = $request->nombre;
        $alumno->fecha_nacimiento = $request->fecha;
        $alumno->curso = $request->curso;
        $alumno->direccion = md5($request->direccion);
        $alumno->telefono = $request->telefono;
        $alumno->estado = 1;

        if ($al == $dv) {
            $alumno->save();
            session_start();
            $_SESSION['user'] = $request->rut;
            return \View::make('alumUs');
        } else {
            session_start();
            return \View::make('formUTP');
        }
    }

    public function listAll() {
        $alumno = Alumno::all();
        session_start();
        return \View::make('listaAlumno', compact('alumno'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request) {

        $alumno = Alumno::where('rut', '=', $request->rut)->first();
        session_start();
        return \View::make('listaAlumno', $alumno);
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
