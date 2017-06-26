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
Route::get('ConsAlum', function () {
    return view('consultarAlumno');
});
Route::get('listaAlumno', function () {
    session_start();
    return view('listaAlumno');
});


Route::resource('alumno','AlumnoController');
Route::get('alum','AlumnoController@listAll');
Route::get('alumno/show/{id}',['as'=>'alumno/show','uses'=>'AlumnoController@show']);
Route::resource('alumno_usuario','Alumno_usuarioController');
Route::resource('profesor','ProfesorController');
Route::resource('tutoria','TutoriaController');
Route::resource('usuario','UsuarioController');
Route::resource('log','loginController');
Route::post('alu', 'AlumnoController@show');

Route::resource('usu', 'UsuarioController');
Route::resource('us', 'UsuarioController');



 


