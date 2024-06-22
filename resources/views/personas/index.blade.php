@extends('layouts.layout')

@section('title', 'Personas')

@section('content')
    <h1>Lista de Personas</h1>
    <!-- Botón para abrir el modal -->
    <button onclick="document.getElementById('modalForm').style.display='block'" class="btn btn-primary" style="background-color: orange; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px; margin-bottom: 10px;">Agregar Persona</button>
    
    <!-- Modal para el formulario -->
    <div id="modalForm" style="display:none; position:fixed; z-index:1; left:0; top:0; width:100%; height:100%; overflow:auto; background-color:rgb(0,0,0); background-color:rgba(0,0,0,0.4);">
        <div style="background-color:#fefefe; margin:15% auto; padding:20px; border:1px solid #888; width:80%;">
            <span onclick="document.getElementById('modalForm').style.display='none'" style="color:#aaa; float:right; font-size:28px; font-weight:bold;">&times;</span>
            <h2>Agregar Persona</h2>
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
        </div>
    </div>

    <!-- Tabla para mostrar los registros de personas -->
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
