<?php

namespace colegio\Http\Controllers;

use Illuminate\Http\Request;
use colegio\Alumno as Alumno;
use colegio\Profesor as Profesor;
use colegio\Tutoria as Tutoria;

class TutoriaController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $Profesor = Profesor::all();
        $Alumno = Alumno::all();
        session_start();
        return view('agregarTuto', compact('Profesor'), compact('Alumno'));
    }
  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $tuto = Tutoria::all();
        session_start();
        return view('VerTuto', compact('tuto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $tutoria = new Tutoria;

        $tutoria->fecha_tutoria = $request->fecha;
        $tutoria->estado = 'Agendada';
        $tutoria->Alumno_rut = $request->alumno;
        $tutoria->Profesor_rut = $request->profesor;
        $tutoria->save();
        session_start();
        return \View::make('formUTP');
    }

    public function listAll() {
        $Tuto = Tutoria::all();
        session_start();
        return \View::make('listTuto', compact('Tuto'));
    }
    
public function listAll2($id) {
        $Tuto = Tutoria::all()->where('Alumno_rut',$id);
        session_start();
        return \View::make('listTuto', compact('Tuto'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
     echo $id;
        
        //$Tutoria = Tutoria::all()->where('id_tutoria', $id);
        //session_start();
        //return \View::make('MostrarTu', compact($Tutoria));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $Tutoria = Tutoria::all()->where('id_tutoria', $id);
        session_start();
        return View('TutoAct');
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

        $Tutoria = Tutoria::where('id_tutoria', $id);
        $Tutoria->estado = $request->est;
        $Tutoria->update();
        session_start();
        return redirect()->back();




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
