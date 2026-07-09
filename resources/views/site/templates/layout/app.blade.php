<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FutGo | Home</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/libs/Bootstrap-5.3/css/bootstrap.min.css') }}">

    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('assets/libs/Select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/Select2/css/select2-bootstrap-5-theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/select2.theme.css') }}">

    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/libs/datatables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/datatable.theme.css') }}">

    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}">

    <!-- Remix Icon -->
    <link rel="stylesheet" href="{{ asset('assets/icons/remix-icon/remixicon.css') }}">

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
    <script src="{{ asset('assets/libs/Bootstrap-5.3/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Select2 -->
    <script src="{{ asset('assets/libs/Select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.config.js') }}"></script>
    <script src="{{ asset('assets/libs/Select2/js/i18n/es.js') }}"></script>

    <!-- DataTables -->
    <script src="{{ asset('assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable.config.js') }}"></script>

    <!-- SweetAlert -->
    <script src="{{ asset('assets/libs/SweetAlert2/sweetalert2.min.js') }}"></script>

    <!-- JS -->
    @yield('js')
</body>

</html>