<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstanciaCurso extends Model
{
    public function curso()
	{
	    return $this->belongsTo('App\Curso', 'curso_id', 'id');
	}

	public function matriculaInstanciaCurso()
    {
        return $this->hasMany('App\MatriculaInstanciaCurso', 'instanciaCurso_id', 'id');
    }
}
