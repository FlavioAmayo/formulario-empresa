<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 10px;
        }

        nav ul li a {
            text-decoration: none;
            color: black;
            background-color: #ff6600;
            padding: 5px 10px;
        }

        nav ul li a.active {
            background-color: #555;
            color: white;
        }

        nav ul li a:hover:not(.active) {
            background-color: #555;
            color: white;
        }

        .container {
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        #createPersonaForm {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
            z-index: 1000;
        }

        #createPersonaForm label {
            display: block;
            margin-top: 10px;
        }

        #createPersonaForm input, #createPersonaForm select, #createPersonaForm button {
            display: block;
            width: 100%;
            margin-top: 5px;
        }

        #overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: red;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('inicio') }}" class="{{ request()->is('/') ? 'active' : '' }}">Inicio</a></li>
            <li><a href="{{ route('personas.index') }}" class="{{ request()->is('personas') ? 'active' : '' }}">Personas</a></li>
            <li><a href="{{ route('contacto') }}" class="{{ request()->is('contacto') ? 'active' : '' }}">Contacto</a></li>
        </ul>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <div id="overlay" onclick="document.getElementById('createPersonaForm').style.display='none';document.getElementById('overlay').style.display='none';"></div>
</body>
</html>
