<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    public function instanciaCurso()
    {
        return $this->hasMany('App\InstanciaCurso', 'curso_id', 'id');
    }
}
