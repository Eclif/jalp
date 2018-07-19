<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
use App\Curso;

class AdminController extends Controller{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin(){
        $alumnos = Alumno::all();
        $cursos = Curso::all(); 
        return view('admin')->with(["alumnos" => $alumnos, "cursos" => $cursos]);
    }



}