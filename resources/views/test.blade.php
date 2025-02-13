<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Título de la Aplicación')</title>
    <!-- Aquí se pueden incluir enlaces CSS comunes (Bootstrap, estilos propios, etc.) -->
</head>
<body>
    <!-- Navbar genérico -->
    <nav>
        <ul>
            <li><a href="{{ url('/') }}">Inicio</a></li>
            <li><a href="{{ url('/quienes-somos') }}">Quiénes Somos</a></li>
            <li><a href="{{ url('/test') }}">Test</a></li>
        </ul>
    </nav>

    <!-- Contenedor principal para visualizar el contenido específico de cada vista -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Scripts comunes (por ejemplo, jQuery, Bootstrap JS) -->
</body>
</html>