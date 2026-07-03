<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FutGo | Home</title>

    <!-- Bootstrap 5.3 CSS -->
    <link rel="stylesheet" href="{{ asset('assets/site/bootstrap-5.3/css/bootstrap.min.css') }}">

    <!-- CSS -->
    @yield('css')
</head>
<body>
    <!-- Contenedor Principal Flex -->
    <div class="d-flex flex-column" style="min-height: 100vh;">

        <!-- HEADER -->
        @include('site.templates.components.header')
        <!-- Fin HEADER -->

        <!-- CONTENIDO PRINCIPAL (Abajo del header) -->
        <main class="p-4 flex-grow-1 bg-light">
            @yield('content')
        </main>

    </div>

    <!-- JS Bootstrap 5.3 -->
    <script src="{{ asset('assets/site/bootstrap-5.3/js/bootstrap.bundle.min.js') }}"></script>

    <!-- JS -->
    @yield('js')
</body>

</html>