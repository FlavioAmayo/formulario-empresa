@extends('layouts.layout')

@section('title', 'Personas')

@section('content')
<h1>Lista de Personas</h1>

<!-- Botón para abrir el modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createPersonaModal">
  Agregar Persona
</button>

<!-- Modal -->
<div class="modal fade" id="createPersonaModal" tabindex="-1" role="dialog" aria-labelledby="createPersonaModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createPersonaModalLabel">Crear Persona</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('personas.store') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="cPerApellido">Apellido:</label>
            <input type="text" class="form-control" name="cPerApellido" id="cPerApellido" value="{{ old('cPerApellido') }}">
            {{ $errors->first('cPerApellido') }}
          </div>
          <div class="form-group">
            <label for="cPerNombre">Nombre:</label>
            <input type="text" class="form-control" name="cPerNombre" id="cPerNombre" value="{{ old('cPerNombre') }}">
            {{ $errors->first('cPerNombre') }}
          </div>
          <div class="form-group">
            <label for="cPerDireccion">Dirección:</label>
            <input type="text" class="form-control" name="cPerDireccion" id="cPerDireccion" value="{{ old('cPerDireccion') }}">
            {{ $errors->first('cPerDireccion') }}
          </div>
          <div class="form-group">
            <label for="dPerFecNac">Fecha de Nacimiento:</label>
            <input type="date" class="form-control" name="dPerFecNac" id="dPerFecNac" value="{{ old('dPerFecNac') }}">
            {{ $errors->first('dPerFecNac') }}
          </div>
          <div class="form-group">
            <label for="nPerEdad">Edad:</label>
            <input type="number" class="form-control" name="nPerEdad" id="nPerEdad" value="{{ old('nPerEdad') }}">
            {{ $errors->first('nPerEdad') }}
          </div>
          <div class="form-group">
            <label for="nPerSueldo">Sueldo:</label>
            <input type="number" class="form-control" name="nPerSueldo" id="nPerSueldo" value="{{ old('nPerSueldo') }}">
            {{ $errors->first('nPerSueldo') }}
          </div>
          <div class="form-group">
            <label for="cPerRnd">RND:</label>
            <input type="text" class="form-control" name="cPerRnd" id="cPerRnd" value="{{ old('cPerRnd') }}">
            {{ $errors->first('cPerRnd') }}
          </div>
          <div class="form-group">
            <label for="nPerEstado">Estado:</label>
            <select name="nPerEstado" id="nPerEstado" class="form-control">
              <option value="1" {{ old('nPerEstado') == 1 ? 'selected' : '' }}>Activo</option>
              <option value="0" {{ old('nPerEstado') == 0 ? 'selected' : '' }}>Inactivo</option>
            </select>
            {{ $errors->first('nPerEstado') }}
          </div>
          <div class="form-group">
            <label for="cPerSexo">Sexo:</label>
            <select name="cPerSexo" id="cPerSexo" class="form-control">
              <option value="M" {{ old('cPerSexo') == 'M' ? 'selected' : '' }}>Masculino</option>
              <option value="F" {{ old('cPerSexo') == 'F' ? 'selected' : '' }}>Femenino</option>
            </select>
            {{ $errors->first('cPerSexo') }}
          </div>
          <button type="submit" class="btn btn-primary">Añadir</button>
        </form>
      </div>
    </div>
  </div>
</div>

<table border="1">
    <thead>
        <tr>
            <th>Apellido</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Fecha de Nacimiento</th>
            <th>Edad</th>
            <th>Sueldo</th>
            <th>Rnd</th>
            <th>Estado</th>
            <th>Sexo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($personas as $persona)
        <tr>
            <td>{{ $persona->cPerApellido }}</td>
            <td>{{ $persona->cPerNombre }}</td>
            <td>{{ $persona->cPerDireccion }}</td>
            <td>{{ $persona->dPerFecNac }}</td>
            <td>{{ $persona->nPerEdad }}</td>
            <td>{{ $persona->nPerSueldo }}</td>
            <td>{{ $persona->cPerRnd }}</td>
            <td>{{ $persona->nPerEstado }}</td>
            <td>{{ $persona->cPerSexo }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
