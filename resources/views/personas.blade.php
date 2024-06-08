@extends('layouts.layout')

@section('title', 'Personas')

@section('content')
    <h1>Lista de Personas</h1>
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
