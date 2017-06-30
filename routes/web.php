<?php

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::get('/', function () {
    return view('welcome');
});
Route::get('home', function () {
    return view('welcome');
});
Route::get('login', function () {
    return view('login');
});
Route::get('utp', function () {
    session_start();
    return view('formUTP');
});
Route::get('alumUs', function () {
    return view('alumUs');
});

Route::get('listaAlumno', function () {
    session_start();
    return view('listaAlumno');
});

Route::get('ListaProfesor', function () {
    session_start();
    return view('ListaProfesor');
    });

Route::get('secre', function () {
    session_start();
    return view('formSecretaria');

});
Route::get('Alfrom', function () {
    session_start();
    return view('Alum');
});
Route::get('TutoAct', function () {
    session_start();
    return view('MostrarTu');
});




//alumno
Route::resource('alumno', 'AlumnoController');
Route::get('alum', 'AlumnoController@listAll');
Route::get('alum2', 'AlumnoController@listAll2');
Route::get('alumno/show/{id}', ['as' => 'alumno/show', 'uses' => 'AlumnoController@show']);
Route::resource('alumno_usuario', 'Alumno_usuarioController');

Route::resource('tutoria', 'TutoriaController');
Route::resource('usuario', 'UsuarioController');
Route::resource('log', 'loginController');
Route::post('alu', 'AlumnoController@show');
Route::get('alumno/destroy/{id}',['as'=>'alumno/destroy','uses'=>'AlumnoController@destroy']);
//usuario
Route::resource('usuario','UsuarioController');

Route::get('Tuto', ['as' => 'Tuto', 'uses' => 'TutoriaController@index']);
//Route::get('Tuto', 'TutoriaController@index');


Route::resource('usu', 'UsuarioController');
Route::resource('us', 'UsuarioController');
Route::resource('us', 'UsuarioController@');

//otro
Route::resource('log','loginController');
//Route::resource('tutoria','TutoriaController');
//profesor
Route::resource('profesor','ProfesorController');
Route::get('pro','ProfesorController@listAll');
Route::get('pro2','ProfesorController@listAll2');
Route::post('prof', 'ProfesorController@show');
Route::get('profesor/destroy/{id}',['as'=>'profesor/destroy','uses'=>'ProfesorController@destroy']);

Route::get('usu', 'UsuarioController@listAll');
Route::get('usu2', 'UsuarioController@listAll2');
Route::post('usu1', 'UsuarioController@show');
Route::get('alumno/destroy/{id}', ['as' => 'alumno/destroy', 'uses' => 'AlumnoController@destroy']);
Route::get('usuario/destroy/{id}', ['as' => 'usuario/destroy', 'uses' => 'UsuarioController@destroy']);





Route::resource('tuto', 'TutoriaController');
Route::resource('tut1', 'TutoriaController@show');

Route::resource('Alumno', 'AlumnoController');
Route::get('tut', 'TutoriaController@listAll');
Route::get('tut/listAll2/{id}', ['as' => 'tut/listAll2', 'uses' => 'TutoriaController@listAll2']);






