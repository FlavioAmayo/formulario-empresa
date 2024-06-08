@extends('layouts.app')

@section('title', 'Personas')

@section('content')
    <h1>Listado de Personas</h1>
    <ul>
        @foreach($personas as $persona)
            <li>{{ $persona->cPerNombre }} {{ $persona->cPerApellido }}</li>
        @endforeach
    </ul>

    {{ $personas->links() }}
@endsection
