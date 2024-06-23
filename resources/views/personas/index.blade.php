@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Personas</h1>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createPersonaModal">
        Agregar Persona
    </button>
    
    <!-- Modal -->
    <div class="modal fade" id="createPersonaModal" tabindex="-1" role="dialog" aria-labelledby="createPersonaModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createPersonaModalLabel">Agregar Persona</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('personas.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="apellido">Apellido</label>
                            <input type="text" class="form-control" id="apellido" name="apellido" required>
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="direccion">Dirección</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" required>
                        </div>
                        <div class="form-group">
                            <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                            <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
                        </div>
                        <div class="form-group">
                            <label for="edad">Edad</label>
                            <input type="number" class="form-control" id="edad" name="edad" required>
                        </div>
                        <div class="form-group">
                            <label for="sueldo">Sueldo</label>
                            <input type="number" step="0.01" class="form-control" id="sueldo" name="sueldo" required>
                        </div>
                        <div class="form-group">
                            <label for="estado">Estado</label>
                            <input type="text" class="form-control" id="estado" name="estado" required>
                        </div>
                        <div class="form-group">
                            <label for="sexo">Sexo</label>
                            <select class="form-control" id="sexo" name="sexo" required>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Crear</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Apellido</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Fecha de Nacimiento</th>
                <th>Edad</th>
                <th>Sueldo</th>
                <th>Estado</th>
                <th>Sexo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personas as $persona)
            <tr>
                <td>{{ $persona->apellido }}</td>
                <td>{{ $persona->nombre }}</td>
                <td>{{ $persona->direccion }}</td>
                <td>{{ $persona->fecha_nacimiento }}</td>
                <td>{{ $persona->edad }}</td>
                <td>{{ $persona->sueldo }}</td>
                <td>{{ $persona->estado }}</td>
                <td>{{ $persona->sexo }}</td>
                <td>
                    <a href="{{ route('personas.edit', $persona->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('personas.destroy', $persona->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta persona?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
