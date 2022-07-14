@extends('layout/plantilla')
@section('tituloPagina', 'Crear Persona')

@section('contenido')
    <br><br>
    <div class="card">
        <div class="card-header">
            Eliminamos una Persona
        </div>
        <div class="card-body">
            <h5 class="card-title">Editar</h5>
            <p class="card-text">

            <form action="{{ route('personas.destroy', $personas->id) }}" method="POST">
                @csrf
                @method('DELETE')
                
                <div class="form-outline">
                    <label class="form-label" for="formControlDefault">Nombres</label>
                    <input type="text" name="nombres" id="nombres" class="form-control" required value="{{ $personas->nombres }}" readonly />
                </div>
                <div class="form-outline">
                    <label class="form-label" for="formControlDefault">Apellidos</label>
                    <input type="text" name="apellidos" id="apellidos" class="form-control" required value="{{ $personas->apellidos }}" readonly />
                </div>
                <div class="form-outline">
                    <label class="form-label" for="formControlDefault">Fecha de nacimiento</label>
                    <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" required
                        value="{{ $personas->fecha_nacimiento }}" readonly />
                </div>
                </p>
                <br>
                <a href="{{ route('personas.index') }}" class="btn btn-info">
                    <span class="fas fa-undo-alt"></span>  Regresar
                </a>
                <button class="btn btn-danger">
                    <span class="fas fa-user-edit"></span>  Eliminar
                </button>
        </div>
        </form>
    </div>
@endsection

