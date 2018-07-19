@extends('layouts.app')

@section('content')







<div class="card-body col-md-4">
    <h2>Crear Curso</h2>
    <form id="form-cursos" method="POST" action="{{ route('crear_curso') }}#form-cursos" >
        @csrf
            <div class="form-group row">
                <div class="col-md-12">
                    <input id="sigla" type="text" class="form-control" name="sigla" required autofocus placeholder="Ingrese sigla del curso">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                    <input id="nombre" type="text" class="form-control" name="nombre" placeholder="Ingrese nombre del curso" required>
                </div>
            </div>

            <div class="form-group row">
            
                <div class="col-md-12">
                    <input id="descripcion" type="text" class="form-control" name="descripcion" placeholder="descripcion " required>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-4 offset-md-3">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Crear Curso') }}
                    </button>
                </div>
            </div>
        </form>
</div>

<!-- Crear Estado Matricula  -->
<div class="card-body col-md-4">
    <h2>Crear Estado de Matricula</h2>
    <form id="form-estadoMatricula" method="POST" action="{{ route('crear_estadoMatricula') }}#form-estadoMatricula" >
        @csrf

            <div class="form-group row">
                <div class="col-md-12">
                    <input id="estado" type="text" class="form-control" name="estado" placeholder="Ingrese nombre del estado" required>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-4 offset-md-3">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Crear Estado Matricula') }}
                    </button>
                </div>
            </div>
        </form>
</div>

<!-- Crear Instancia Curso   -->
<div class="card-body col-md-4">
    <h2>Crear Instancia de Curso</h2>
    <form id="form-instanciaCurso" method="POST" action="{{ route('crear_instanciaCurso') }}#form-instanciaCurso" >
        @csrf
            <div class="form-group row">
                <select class="form-control" name="curso_sel" id="curso_sel">
                    @foreach($cursos as $curso)
                        <option value="{{$curso->id}}" >{{$curso->nombre}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                    <input id="agno" type="text" class="form-control" name="agno" placeholder="Ingrese año" required>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                    <input id="semestre" type="text" class="form-control" name="semestre" placeholder="Ingrese semestre" required>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-4 offset-md-3">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Crear Instancia Curso') }}
                    </button>
                </div>
            </div>
        </form>
</div>

<!-- Crear Instancia Curso   -->
@endsection
