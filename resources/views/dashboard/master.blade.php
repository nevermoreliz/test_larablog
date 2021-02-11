<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Modulo admin</title>
</head>

<body>

    <header>
        @include('dashboard.partials.nav-header-main')
    </header>

    <section>
        <div class="container">
            @include('dashboard.partials.session-flash-status')
            @yield('content')
        </div>
    </section>

    <script src="{{ asset('js/app.js') }}" defer></script>
</body>

</html>
