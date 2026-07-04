<header class="bg-white py-3 px-4 rounded-4 shadow-sm m-3 mb-0">
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
                
                <!-- Menú Desplegable -->
                <ul class="dropdown-menu dropdown-menu-end shadow" style="min-width: 180px;">
                    <li>
                        <!-- Cabecera: Inicial a la izquierda, textos a la derecha en la misma fila -->
                        <div class="d-flex align-items-center px-3 py-2">
                            <!-- Inicial 'U' en la parte izquierda -->
                            <div class="d-flex align-items-center justify-content-center bg-success text-white rounded-circle fw-bold fs-5 me-3" 
                                style="width: 40px; height: 40px; flex-shrink: 0;">
                                U
                            </div>
                            <!-- Nombre, Rol y Correo al lado derecho de la 'U' -->
                            <div class="d-flex flex-column text-start">
                                <span class="text-dark fw-bold lh-sm">Usuario Completo</span>
                                <span class="text-muted small lh-sm">Administrador</span>
                                <span class="text-muted small lh-sm" style="font-size: 0.75rem;">email@example.com</span>
                            </div>
                        </div>
                    </li>
                    
                    <li><hr class="dropdown-divider"></li>

                    <!-- Opciones del menú alineadas a la izquierda -->
                    <li><a class="dropdown-item" href="#">Perfil</a></li>
                    <li>
                        <!-- d-flex sin centrado mantiene el texto a la izquierda y el badge pegado a él -->
                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="#">
                            <span>Mensajes</span>
                            <span class="badge text-bg-danger">5</span>
                        </a>
                    </li>
                    <li><a class="dropdown-item" href="#">Configuración</a></li>
                    
                    <li><hr class="dropdown-divider"></li>
                    
                    <!-- Opción de salir alineada a la izquierda -->
                    <li><a class="dropdown-item text-danger" href="{{ route('site.index') }}">Salir</a></li>
                </ul>
            </div>
        </div>

    </div>
</header>