@extends('layouts.master')

@section('content')
    <h1>Blog</h1>
    @if ($opcional)
        <p>Parámetro opcional: {{ $opcional }}</p>
    @else
        <p>Sin parámetros opcionales.</p>
    @endif
@endsection
