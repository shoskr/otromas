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
    return view('formUTP');
});


Route::resource('alumno','AlumnoControllet');
Route::resource('alumno_usuario','Alumno_usuarioController');
Route::resource('profesor','ProfesorController');
Route::resource('tutoria','TutoriaController');
Route::resource('usuario','UsuarioController');
Route::resource('log','loginController');

Route::resource('usu', 'UsuarioController');
Route::resource('us', 'UsuarioController');



 


