<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EstadoMatricula;

class EstadoMatriculaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function estado()
    {
        $estados = EstadoMatricula::all();
        return view('estado')->with(["estados" => $estados]);;
    }
    public function crearEstadoMatricula(Request $request){
            $estado = new EstadoMatricula;
            $estado->estado = $request->estado;
            $estado->save();
    
            return redirect()->route('admin');
    }
    public function mostrarInfo_estado(Request $request){
        $estado_sel = $request->estado_sel;
        $estados = EstadoMatricula::all();
        $datos_estado = $estados->find($estado_sel);
        return redirect()->route('estado')->with($datos_estado);
    }

}
