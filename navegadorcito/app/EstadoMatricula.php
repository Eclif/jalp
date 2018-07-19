<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoMatricula extends Model
{
    public function matriculaInstanciaCurso()
    {
        return $this->hasMany('App\MatriculaInstanciaCurso', 'estadoMatricula_id', 'id');
    }
}
