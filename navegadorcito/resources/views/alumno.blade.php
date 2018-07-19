@extends('layouts.app')

@section('content')
<div class="card-body col-md-12">
    <div class="float-left col-md-4">
    <h2>Crear Alumno</h2>
        <form id ="form-alumnos" method="POST" action="{{ route('crear_alumno') }}#form-alumnos" >
            @csrf
                <div class="form-group row">
                    <div class="col-md-12">
                        <input id="rut" type="text" class="form-control" name="rut" required autofocus placeholder="Ingrese rut">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        <input id="nombre" type="text" class="form-control" name="nombre" placeholder="Ingrese nombre" required>
                    </div>
                </div>

                <div class="form-group row">
                
                    <div class="col-md-12">
                        <input id="materno" type="text" class="form-control" name="apellido_materno" placeholder="Apellido Materno" required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        <input id="paterno" type="text" class="form-control" name="apellido_paterno" placeholder="Apellido Paterno" required>
                    </div>
                </div>
                <div class="form-group row">
                
                    <div class="col-md-12">
                        <input id="email" type="text" class="form-control" name="email" placeholder="Ingrese email" required>
                    </div>
                </div>
                <div class="form-group row">
                
                    <div class="col-md-12">
                        <input id="password" type="password" class="form-control" name="password" placeholder="Ingrese contraseña" required>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-4 offset-md-3">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Crear Alumno') }}
                        </button>
                    </div>
                </div>
        </form>
    </div>
    
    <div class="col-md-4 float-left">
        <h2>Editar Alumno</h2>
        <form method="POST" action="{{ route('mostrarInfo_alumno') }}" >
        @csrf
            <div class="form-group row col-md-12">
                <select class="form-control" name="alumno_sel" id="alumno_sel" >
                <option value="volvo" disabled selected>Seleccione a un Alumno</option>
                    @foreach($alumnos as $alumno)
                        <option value="{{$alumno->rut}}" >{{$alumno->nombres}} {{$alumno->apellido_paterno}}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group row col-md-12">
                <input type="submit" id="submitEdit" style="height: 0px; width: 100%; opacity: 0;">
            </div>
        </form>
        
        @if($alumnoInfo)
            <div>{{$alumnoInfo->nombres}}</div>
        @endif
    </div>

    <div class="col-md-4 float-left">
        <h2>Eliminar Alumno</h2>
        <form method="POST" action="{{ route('mostrarInfo_alumno') }}"name="form_alumno_eliminar" >
        @csrf
            <div class="form-group row col-md-12">
                <select class="form-control" name="alumno_sel2" id="alumno_sel2" onchange="enviarForm()" >
                    @foreach($alumnos as $alumno)
                        <option value="{{$alumno->rut}}" >{{$alumno->nombres}} {{$alumno->apellido_paterno}}}</option>
                    @endforeach
                </select>
            </div>

           
            
            <div class="form-group row mb-0">
                    <div class="col-md-4 offset-md-3">
                        <button type="submit" class="btn btn-primary" id="EliminarAlumno">
                            {{ __('Eliminar Alumno') }}
                        </button>
                    </div>
            </div>
        </form>
    </div>


</div>

<script>

    $(document).ready(function(){
        $('#alumno_sel').change( function(){
            $('#submitEdit').click();
        });
    });
   
</script>


@endsection
