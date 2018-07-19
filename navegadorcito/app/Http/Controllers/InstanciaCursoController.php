<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InstanciaCurso;
use App\Http\Controllers\CursoController;

class InstanciaCursoController extends Controller
{
    public function crearInstanciaCurso(Request $request){
        $controller = new CursoController;
        $curso = $controller->buscarCurso($request);
        $instancia = new InstanciaCurso;
        $instancia->agno = $request->agno;
        $instancia->semestre = $request->semestre;
        $instancia->curso()->associate($curso);
        $instancia->save();
        return redirect()->route('admin');
   }
   public function mostrarInstancia(Request $request){
       $instancia = InstanciaCurso::all();
       return view('admin')->with("instancias",$instancia);
   }    

}
