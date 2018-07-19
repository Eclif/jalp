<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    
     public function user()
    {
       return $this->belongsTo('App\User', 'user_id' , 'id');
    }

    public function matriculaInstanciaCurso()
    {
        return $this->hasMany('App\MatriculaInstanciaCurso', 'alumno_id', 'rut');
    }
}
