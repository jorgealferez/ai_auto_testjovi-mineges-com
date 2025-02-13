<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title', config('app.name', 'Nombre de la Aplicación'))</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .container { max-width: 1200px; margin: auto; padding: 0 15px; }
        .navbar { background-color: black; padding: 10px 0; }
        .navbar .container { display: flex; align-items: center; justify-content: space-between; }
        .navbar a { color: white; text-decoration: none; }
        .navbar-toggler { background: none; border: none; font-size: 24px; color: white; cursor: pointer; }
        .navbar-menu { display: none; }
        .navbar-menu ul { list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; }
        .navbar-menu li { margin: 10px 0; }
        
        @media (min-width: 768px) {
            .navbar-toggler { display: none; }
            .navbar-menu { display: block !important; }
            .navbar-menu ul { flex-direction: row; }
            .navbar-menu li { margin: 0 15px; }
        }
        
        footer { background-color: black; color: white; padding: 20px 0; }
        footer .container { display: flex; justify-content: space-between; flex-wrap: wrap; }
        footer ul { list-style: none; padding: 0; }
        footer li { margin-bottom: 10px; }
        footer a { color: white; text-decoration: none; }
    </style>
    @yield('styles')
</head>
<body>
    @include('partials.navbar')

    <div class="content">
        @yield('content')
    </div>
    
    @include('partials.footer')
    
    @yield('scripts')
</body>
</html>