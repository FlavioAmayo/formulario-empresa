@extends('layouts.layout')

@section('title', 'Agregar Persona')

@section('content')
    <h1>Agregar Persona</h1>
    <form method="POST" action="{{ route('personas.store') }}">
        @csrf
        <label for="cPerApellido">Apellido:</label>
        <input type="text" id="cPerApellido" name="cPerApellido" required>
        <br>
        <label for="cPerNombre">Nombre:</label>
        <input type="text" id="cPerNombre" name="cPerNombre" required>
        <br>
        <label for="cPerDireccion">Dirección:</label>
        <input type="text" id="cPerDireccion" name="cPerDireccion" required>
        <br>
        <label for="dPerFecNac">Fecha de Nacimiento:</label>
        <input type="date" id="dPerFecNac" name="dPerFecNac" required>
        <br>
        <label for="nPerEdad">Edad:</label>
        <input type="number" id="nPerEdad" name="nPerEdad" required>
        <br>
        <label for="nPerSueldo">Sueldo:</label>
        <input type="number" id="nPerSueldo" name="nPerSueldo" required>
        <br>
        <label for="nPerEstado">Estado:</label>
        <select id="nPerEstado" name="nPerEstado" required>
            <option value="1">Activo</option>
            <option value="0">Inactivo</option>
        </select>
        <br>
        <label for="cPerSexo">Sexo:</label>
        <select id="cPerSexo" name="cPerSexo" required>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
        </select>
        <br><br>
        <button type="submit" class="btn btn-primary" style="background-color: orange; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;">Crear</button>
    </form>
@endsection
