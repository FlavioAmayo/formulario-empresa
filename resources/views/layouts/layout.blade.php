<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        nav {
            background-color: #003366;
            overflow: hidden;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        nav ul li {
            float: left;
        }
        nav ul li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        nav ul li a.active {
            background-color: #ff6600;
            color: white;
        }
        nav ul li a:hover:not(.active) {
            background-color: #555;
            color: white;
        }
        .container {
            padding: 20px;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('inicio') }}" class="{{ request()->is('/') ? 'active' : '' }}">Inicio</a></li>
            <li><a href="{{ route('personas') }}" class="{{ request()->is('personas') ? 'active' : '' }}">Personas</a></li>
            <li><a href="{{ route('contacto') }}" class="{{ request()->is('contacto') ? 'active' : '' }}">Contacto</a></li>
        </ul>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
