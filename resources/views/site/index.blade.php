<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FutGo | Home</title>

    <link rel="stylesheet" href="{{ asset('assets/site/bootstrap-5.3/css/bootstrap.min.css') }}">
</head>
<body>
    <!-- Contenedor Principal Flex -->
    <div class="d-flex flex-column" style="min-height: 100vh;">

        <!-- HEADER RESPONSIVO -->
        <nav class="navbar navbar-expand-lg bg-white border-bottom py-1 px-4">
            <div class="container-fluid p-0">
                
                <!-- Logo FutGo -->
                <a class="navbar-brand fs-5 fw-bold text-success me-4" href="#">FutGo</a>

                <!-- Botón de Hamburguesa -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarFutGo" aria-controls="navbarFutGo" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Contenedor colapsable -->
                <div class="collapse navbar-collapse mt-2 mt-lg-0" id="navbarFutGo">
                    
                    <!-- Buscador -->
                    <form class="d-flex col-12 col-lg-4 my-2 my-lg-0 mx-lg-auto" role="search">
                        <input type="search" class="form-control form-control-sm" placeholder="Buscar en FutGo..." aria-label="Search">
                    </form>

                    <!-- Enlaces y Botón de Login -->
                    <div class="d-flex flex-column flex-lg-row align-items-stretch align-items-lg-center gap-1 text-end ms-lg-auto">
                        <button type="button" class="btn btn-sm btn-link text-dark text-decoration-none py-1 px-3 text-start text-lg-center">Home</button>
                        <button type="button" class="btn btn-sm btn-link text-dark text-decoration-none py-1 px-3 text-start text-lg-center">Contacto</button>
                        <button type="button" class="btn btn-sm btn-link text-dark text-decoration-none py-1 px-3 text-start text-lg-center">Acerca de</button>
                        <a href="{{ route('login') }}" class="btn btn-sm btn-outline-success w-100 w-lg-auto ms-lg-2">Login</a>
                    </div>

                </div>
            </div>
        </nav>

        <!-- CONTENIDO PRINCIPAL (Abajo del header) -->
        <main class="p-4 flex-grow-1 bg-light">
            <h1 class="display-5 fw-bold">FutGo</h1>
            <p class="lead text-muted">Bienvenido al Panel de FutGo!</p>

            <!-- Tarjeta Verde con Letras Blancas -->
            <div class="card text-bg-success mb-3" style="max-width: 18rem;">
                <div class="card-header">Estadísticas</div>
                <div class="card-body">
                    <h5 class="card-title">Panel de Control Activo</h5>
                    <p class="card-text">Aquí verás toda la información detallada de tus torneos y partidos en tiempo real.</p>
                </div>
            </div>
        </main>

    </div>

    <script src="{{ asset('assets/site/bootstrap-5.3/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>