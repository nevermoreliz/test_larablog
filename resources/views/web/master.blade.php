<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Modulo admin</title>
</head>

<body>

    <div id="app">
        <header>
            @include('web.partials.nav-header-main')
        </header>
        <div class="container mb-3 mt-3" id="app">
            @include('dashboard.partials.session-flash-status')
            @yield('content')
        </div>
        <footer>
            @include('web.partials.footer-main')
        </footer>
    </div>
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
