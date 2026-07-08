<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FutGo | Home</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/libs/bootstrap-5.3/css/bootstrap.min.css') }}">

    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/libs/datatables/datatables.min.css') }}">

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}">

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

    <!-- JQuery -->
    <script src="{{ asset('assets/libs/JQuery-4.0.0/jquery-4.0.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('assets/libs/bootstrap-5.3/js/bootstrap.bundle.min.js') }}"></script>

    <!-- DataTables -->
    <script src="{{ asset('assets/libs/datatables/datatables.min.js') }}"></script>

    <!-- SweetAlert -->
    <script src="{{ asset('assets/libs/SweetAlert2/sweetalert2.min.js') }}"></script>

    <!-- JS -->
    @yield('js')
</body>

</html>