<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MatriculaInstanciaCurso extends Model
{
     public function alumno()
	{
	    return $this->belongsTo('App\Alumno', 'alumno_id', 'rut');
	}
	 public function InstanciaCurso()
	{
	    return $this->belongsTo('App\InstanciaCurso', 'instanciaCurso_id', 'id');
	}
	 public function estadoMatricula()
	{
	    return $this->belongsTo('App\EstadoMatricula', 'estadoMatricula_id', 'id');
	}
}
