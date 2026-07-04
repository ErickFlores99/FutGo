<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador FutGo | Home</title>

    <!-- Bootstrap 5.3 CSS -->
    <link rel="stylesheet" href="{{ asset('assets/site/bootstrap-5.3/css/bootstrap.min.css') }}">

    <!-- CSS -->
    @yield('css')
</head>
<body>
    <!-- Contenedor Principal -->
    <div class="d-flex flex-column flex-lg-row" style="min-height: 100vh;">

        <!-- SIDEBAR -->
        @include('admin.template.components.sidebar')
        <!-- Fin SIDEBAR -->

        <!-- CONTENEDOR DERECHO (Header + Contenido) -->
        <div class="d-flex flex-column flex-grow-1 bg-light min-vw-0">
    
            <!-- Header -->
            <div class="ms-lg-3 bg-white rounded-bottom-lg-3 shadow-sm">
                @include('admin.template.components.header')
            </div>

            <!-- Contenido principal -->
            <main class="p-4 ms-lg-3 mt-4 bg-white rounded-3 shadow-sm">
                @yield('content')
            </main>

        </div>
    </div>

    <!-- JS Bootstrap 5.3 -->
    <script src="{{ asset('assets/site/bootstrap-5.3/js/bootstrap.bundle.min.js') }}"></script>
    
    <!-- JS -->
    @yield('js')
</body>

</html>