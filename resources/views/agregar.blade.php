@extends('layout/plantilla')
@section('tituloPagina', 'Crear Persona')

@section('contenido')
<br><br>
    @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
    <div class="card">
        <div class="card-header">
            Agregamos una Nueva Persona 
        </div>
        <div class="card-body">
            <h5 class="card-title">Agregar Nuevo</h5>
            <p class="card-text">
            <form action="{{route('personas.store')}}" method="POST">
                @csrf    
            <div class="form-outline">
                <label class="form-label" for="formControlDefault">Nombres</label>
                <input type="text" name="nombres" id="nombres" class="form-control" required />
            </div>
            <div class="form-outline">
                <label class="form-label" for="formControlDefault">Apellidos</label>
                <input type="text" name="apellidos" id="apellidos" class="form-control" required />
            </div>
            <div class="form-outline">
                <label class="form-label" for="formControlDefault">Fecha de nacimiento</label>
                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" required />
            </div>
            </p>
            <button class="btn btn-primary">
            <span class="fas fa-user-plus"> Agregar </span>
            </button>
            <a href="{{route('personas.index')}}" class="btn btn-primary">Atras</a>
        </div>
        </form>
    </div>
@endsection
