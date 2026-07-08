<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador FutGo | Home</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/libs/Bootstrap-5.3/css/bootstrap.min.css') }}">

    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('assets/libs/Select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/libs/Select2/css/select2-bootstrap-5-theme.min.css') }}">

    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/libs/datatables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/datatable.theme.css') }}">

    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('assets/libs/Select2/select2.min.css') }}">
    
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="{{ asset('assets/libs/sweetalert2/sweetalert2.min.css') }}">

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

    <!-- JQuery -->
    <script src="{{ asset('assets/libs/JQuery-4.0.0/jquery-4.0.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('assets/libs/Bootstrap-5.3/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Select2 -->
    <script src="{{ asset('assets/libs/Select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/libs/Select2/js/i18n/es.js') }}"></script>

    <!-- DataTables -->
    <script src="{{ asset('assets/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatable.config.js') }}"></script>

    <!-- Select2 -->
    <script src="{{ asset('assets/libs/Select2/select2.min.js') }}"></script>

    <!-- SweetAlert -->
    <script src="{{ asset('assets/libs/SweetAlert2/sweetalert2.min.js') }}"></script>
    
    <!-- JS -->
    @yield('js')
</body>

</html>