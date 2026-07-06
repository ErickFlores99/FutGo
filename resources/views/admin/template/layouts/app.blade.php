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
<body class="bg-light">
    <!-- Contenedor Principal -->
    <div class="d-flex flex-column flex-lg-row" style="min-height: 100vh;">

        <!-- Sidebar -->
        @include('admin.template.components.sidebar')
        <!-- Fin Sidebar -->

        <!-- CONTENEDOR DERECHO (Header + Contenido) -->
        <div class="d-flex flex-column flex-grow-1 min-vw-0">
    
            <!-- Header -->
            @include('admin.template.components.header')
            <!-- Fin Header -->

            <!-- Contenido principal -->
            <main class="pt-4 ps-4">
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