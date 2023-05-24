@extends('layout/plantilla')
@section('tituloPagina', 'crud con laravel 8')

@section('contenido')
    <div class="card">
        <div class="card-header">
            Primer CRUD con Laravel 8
        </div>
        <div class="card-body">
            <h5 class="card-title" style="text-align: center;" >Personas</h5>
            <p>
                <a href="{{ route('personas.create') }}" class="btn btn-primary">
                    <i class="fas fa-user-plus"></i> Crear Personas</a>
            </p>
            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
            <?php
            //dd($datos);
            ?>
            <p class="card-text">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col"># Id</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Fecha de Nacimiento</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datos as $item)
                        <tr>
                            <th scope="row">{{ $item->id }}</th>
                            <td>{{ $item->nombres }}</td>
                            <td>{{ $item->apellidos }}</td>
                            <td>{{ $item->fecha_nacimiento }}</td>
                            <td>
                                <form action="{{ route('personas.edit', $item->id) }}" method="GET">
                                    <button class="btn btn-warning btn-sm">
                                        <span class="fas fa-user-edit"></span>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route('personas.show', $item->id) }}" method="GET">
                                    <button class="btn btn-danger btn-sm">
                                        <span class="fas fa-user-times"></span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <hr>
            <div class="row" style="justify-content: center;">
                <div class="col-sm-12">

                    {{ $datos->links() }}
                </div>
            </div>
            </p>
        </div>
    </div>
@endsection
