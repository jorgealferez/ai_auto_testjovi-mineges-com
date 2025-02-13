<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Mi Aplicación')</title>
    <!-- Bootstrap CSS Integration via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS (loaded after Bootstrap to allow overrides) -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    @yield('styles')
</head>
<body>
    @include('partials.navbar')

    <div class="container my-4">
        @yield('content')
    </div>

    @include('partials.footer')

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>