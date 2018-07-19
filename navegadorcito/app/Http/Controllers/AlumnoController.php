<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Alumno;
use App\User;

class AlumnoController extends Controller{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function alumno(Alumno $alumno)
    {
        $alumnos = Alumno::all();
        if(isset($alumno)){
            dd($alumno);
            return view('alumno')->with(["alumnos" => $alumnos , "alumnoInfo" => $alumno]);
        }else{
            return view('alumno')->with(["alumnos" => $alumnos , "alumnoInfo" => 'null']);
        }
        
    }

    public function crearUsuarioAlumno(Request $request){
        return User::create([
            'name' => $request->nombre,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'type' => 'alumno', 
        ]);
        
    }
  
    public function crearAlumno(Request $request){
         $user = $this->crearUsuarioAlumno($request);
         $alumno = new Alumno;
         $alumno->rut = $request->rut;
         $alumno->user()->associate($user);
         $alumno->nombres = $request->nombre;
         $alumno->apellido_materno = $request->apellido_materno;
         $alumno->apellido_paterno = $request->apellido_paterno;
         $alumno->save();
         return redirect()->route('alumno');
    }

    public function mostrarInfo_alumno(Request $request){
        $alumno_sel = $request->alumno_sel;
        $alumnos = Alumno::all();
        $datos_alu = $alumnos->find($request->$alumno_sel);
        $this->alumno($datos_alu);
  
    }
    
}
