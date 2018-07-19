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

Auth::routes();

Route::get('/home', 'HomeController@index')
    ->name('home');

Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');

Route::get('/admin/alumno', 'AlumnoController@alumno')
    ->middleware('is_admin')
    ->name('alumno');

Route::post('/admin/alumno', 'AlumnoController@mostrarInfo_alumno')
    ->name('mostrarInfo_alumno');

Route::post('/admin/crearAlumno', 'AlumnoController@crearAlumno')
    ->name('crear_alumno');

Route::post('/admin/editarAlumno', 'AlumnoController@editarAlumno')
    ->name('editar_alumno');

Route::get('/admin/curso', 'CursoController@curso')
    ->middleware('is_admin')
    ->name('curso');

Route::post('/admin/curso', 'CursoController@mostrarInfo_curso')
    ->name('mostrarInfo_curso');

Route::post('/admin/crearCurso', 'CursoController@crearCurso')
    ->name('crear_curso');

Route::post('/crearInstanciaCurso', 'InstanciaCursoController@crearInstanciaCurso')
    ->name('crear_instanciaCurso');
    
Route::get('/admin/estado', 'EstadoMatriculaController@estado')
    ->middleware('is_admin')
    ->name('estado');

Route::post('/admin/estado', 'EstadoMatriculaController@mostrarInfo_estado')
    ->name('mostrarInfo_estado');

Route::post('/admin/crearEstadoMatricula', 'estadoMatriculaController@crearEstadoMatricula')
    ->name('crear_estadoMatricula');

Route::post('/crearMatriculaInstanciaCurso', 'matriculaInstanciaCursoController@crearMatriculaInstanciaCurso')
    ->name('crear_matriculaInstanciaCurso');