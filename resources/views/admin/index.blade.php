<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador FutGo | Home</title>

    <link rel="stylesheet" href="{{ asset('assets/site/bootstrap-5.3/css/bootstrap.min.css') }}">
</head>
<body>
    <!-- Contenedor Principal -->
    <div class="d-flex flex-column flex-lg-row" style="min-height: 100vh;">

        <!-- 1. SIDEBAR (Se vuelve Offcanvas responsivo usando la clase offcanvas-lg) -->
        <div class="offcanvas-lg offcanvas-start text-bg-dark flex-shrink-0 p-3" 
            tabindex="-1" 
            id="sidebarMenu" 
            aria-labelledby="sidebarMenuLabel" 
            style="width: 280px;">
            
            <!-- Encabezado del Sidebar (Solo visible en móviles para poder cerrarlo) -->
            <div class="offcanvas-header d-lg-none">
                <h5 class="offcanvas-title text-success fw-bold" id="sidebarMenuLabel">FutGo</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
            </div>

            <!-- Contenido del Sidebar (Visible siempre en PC, colapsable en móvil) -->
            <div class="offcanvas-body d-flex flex-column p-0">
                <a href="#" class="d-none d-lg-flex align-items-center mb-3 text-decoration-none">
                    <span class="fs-4 fw-bold text-success">FutGo</span> 
                </a>
                <hr class="d-none d-lg-block text-white-50">
                
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item"> 
                        <a href="#" class="nav-link active bg-success text-white" aria-current="page">
                            Home
                        </a> 
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white-50">Partidos</a>
                    </li>
                    <li>
                        <a href="#" class="nav-link text-white-50">Equipos</a>
                    </li>
                </ul>
                <hr class="text-white-50">
            </div>
        </div>

        <!-- 2. CONTENEDOR DERECHO (Header + Contenido) -->
        <div class="d-flex flex-column flex-grow-1 bg-light min-vw-0">
            
            <!-- HEADER Responsivo -->
            <header class="bg-white py-3 px-4 border-bottom">
                <div class="row align-items-center g-3">
                    
                    <!-- Botón de menú (Solo visible en móviles/tablets para abrir el Sidebar) -->
                    <div class="col-auto d-lg-none">
                        <button class="btn btn-outline-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu">
                            <span class="navbar-toggler-icon">☰</span>
                        </button>
                    </div>

                    <!-- Logo sutil en móvil para no perder identidad cuando el sidebar está oculto -->
                    <div class="col d-lg-none">
                        <span class="fs-4 fw-bold text-success">FutGo</span>
                    </div>

                    <!-- Buscador (Se reajusta en móviles para ocupar su espacio de forma fluida) -->
                    <div class="col-12 col-md-5 col-lg-5 order-3 order-md-2">
                        <form role="search">
                            <input type="search" class="form-control" placeholder="Buscar en FutGo..." aria-label="Search">
                        </form>
                    </div>

                    <!-- Menú Usuario Dropdown -->
                    <div class="col-auto ms-auto order-2 order-md-3">
                        <div class="dropdown text-end">
                            <a href="#" class="d-inline-flex align-items-center justify-content-center badge text-bg-success rounded-circle text-decoration-none dropdown-toggle" 
                            data-bs-toggle="dropdown" 
                            aria-expanded="false" 
                            style="width: 45px; height: 45px; padding: 0;">
                                <span class="fw-bold fs-4">U</span>
                            </a>
                            
                            <!-- Menú Desplegable con las opciones centradas -->
                            <ul class="dropdown-menu dropdown-menu-end shadow" style="min-width: 260px;">
                                <li>
                                    <div class="d-flex align-items-center px-3 py-2">
                                        <div class="d-flex align-items-center justify-content-center bg-success text-white rounded-circle fw-bold fs-5 me-3" 
                                            style="width: 40px; height: 40px; flex-shrink: 0;">
                                            U
                                        </div>
                                        <div class="d-flex flex-column text-start">
                                            <span class="text-dark fw-bold lh-sm">Usuario Completo</span>
                                            <span class="text-muted small lh-sm">Administrador</span>
                                            <span class="text-muted small lh-sm">email@example.com</span>
                                        </div>
                                    </div>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-center" href="#">Perfil</a></li>
                                <li>
                                    <a class="dropdown-item d-flex justify-content-center align-items-center" href="#">
                                        <span>Mensajes</span>
                                        <span class="badge text-bg-danger ms-2">5</span>
                                    </a>
                                </li>
                                <li><a class="dropdown-item text-center" href="#">Configuración</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-danger text-center" href="{{ route('site.index') }}">Salir</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </header>

            <!-- CONTENIDO PRINCIPAL (Fluido) -->
            <main class="p-4">
                <h1 class="display-5 fw-bold">FutGo</h1>
                <p class="lead text-muted">Bienvenido al Panel Administrativo de FutGo!</p>

                <!-- Tarjeta Verde -->
                <div class="card text-bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-header">Estadísticas</div>
                    <div class="card-body">
                        <h5 class="card-title">Panel de Control Activo</h5>
                        <p class="card-text">Aquí verás toda la información detallada de tus torneos y partidos en tiempo real.</p>
                    </div>
                </div>
            </main>

        </div>
    </div>

    <script src="{{ asset('assets/site/bootstrap-5.3/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>