<?php

namespace colegio\Http\Controllers;

use Illuminate\Http\Request;
use colegio\Profesor as Profesor;

class ProfesorController extends Controller {

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

        $profesor = new Profesor;
        $profesor->rut = $request->rut;

        $al = agregar_dv($request->rut);
        $dv = $request->dv;

        $profesor->nombre_profesor = $request->nombre;
        $profesor->fecha_contrato = $request->fechac;
        $profesor->asignatura = $request->asignatura;
        $profesor->valor_tutoria = $request->valor;
        $profesor->estado = 1;

        if ($al == $dv) {
            $profesor->save();
            session_start();
            $_SESSION['rut'] = $request->rut;
            return \View::make('ListaProfesor', compact($_SESSION['rut']));
        } else {
            session_start();
            return \View::make('formUTP');
        }
    }

    public function listAll() {
        $profesor = Profesor::all();
        session_start();
        return \View::make('ListaProfesor', compact('profesor'));
    }
 public function listAll2() {
        $profesor = Profesor::all();
        session_start();
        return \View::make('elimProfesor', compact('profesor'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request) {

        $pro = Profesor::all()->where('rut', '=', $request->rut);
        session_start();

        return \View::make('consProfesor', compact('pro'));
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
        $profesor = Profesor::where('rut', $id);
        $profesor->delete();
        session_start();
        return redirect()->back();
    }

}
