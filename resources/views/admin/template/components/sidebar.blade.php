<div
    class="offcanvas offcanvas-lg offcanvas-start flex-shrink-0 mt-lg-3 ms-lg-3 mb-lg-3 rounded-4 shadow-sm bg-white"
    tabindex="-1"
    id="sidebarMenu"
    aria-labelledby="sidebarMenuLabel"
    style="width:260px;"
>

    <!-- Header móvil -->
    <div class="offcanvas-header d-lg-none">

        <h5 class="offcanvas-title fw-bold text-success">
            FutGo
        </h5>

        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="offcanvas">
        </button>

    </div>

    <!-- CONTENEDOR -->
    <div class="d-flex flex-column h-100">
        
        <!-- Logo escritorio -->
        <div class="d-none d-lg-flex justify-content-center align-items-center p-3 border-bottom">
            <a href="{{ route('appIndex') }}" class="text-decoration-none">
                <span class="fs-3 fw-bold text-success">
                    FutGo
                </span>
            </a>
        </div>

        <!-- MENU -->
        <div class="flex-grow-1 overflow-auto p-3" id="sidebarScroll">
            <ul class="nav flex-column">
                <!-- Dashboard -->
                <li class="nav-item mb-2">
                    <a href="{{ route('appIndex') }}"
                        class="nav-link @active('appIndex')">
                        <i class="ri-dashboard-line me-2"></i>
                        Dashboard
                    </a>
                </li>

                <!-- Competencias -->
                <li class="mt-3">
                    <button
                        class="btn w-100 text-start sidebar-toggle"
                        data-bs-toggle="collapse"
                        data-bs-target="#menuCompetencias"
                    >
                        <i class="ri-trophy-line me-2"></i>
                        Competencias
                        <i class="ri-arrow-down-s-line float-end"></i>
                    </button>
                    <div class="collapse show" id="menuCompetencias">
                        <ul class="nav flex-column ms-3 mt-2">
                            <li>
                                <a href="{{ route('competencias.index') }}"
                                class="nav-link @active('competencias.*')">
                                    Todas las Competencias
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!-- Gestión -->
                <li class="mt-3">
                    <button
                        class="btn w-100 text-start sidebar-toggle"
                        data-bs-toggle="collapse"
                        data-bs-target="#menuGestion"
                    >
                        <i class="ri-team-line me-2"></i>
                        Gestión
                        <i class="ri-arrow-down-s-line float-end"></i>
                    </button>
                    <div class="collapse" id="menuGestion">
                        <ul class="nav flex-column ms-3 mt-2">
                            <li><a href="#" class="nav-link">Equipos</a></li>
                            <li><a href="#" class="nav-link">Jugadores</a></li>
                            <li><a href="#" class="nav-link">Árbitros</a></li>
                            <li><a href="#" class="nav-link">Canchas</a></li>
                        </ul>
                    </div>
                </li>

                <!-- Catálogos -->
                <li class="mt-3">
                    <button
                        class="btn w-100 text-start sidebar-toggle"
                        data-bs-toggle="collapse"
                        data-bs-target="#menuCatalogos"
                    >
                        <i class="ri-stack-line me-2"></i>
                        Catálogos
                        <i class="ri-arrow-down-s-line float-end"></i>
                    </button>

                    <div class="collapse" id="menuCatalogos">
                        <ul class="nav flex-column ms-3 mt-2">
                            <li><a href="#" class="nav-link">Categorías</a></li>
                            <li><a href="#" class="nav-link">Divisiones</a></li>
                            <li><a href="#" class="nav-link">Tipos</a></li>
                            <li><a href="#" class="nav-link">Días</a></li>
                        </ul>
                    </div>
                </li>

                <!-- Reportes -->
                <li class="mt-3">
                    <a href="#" class="nav-link">
                        <i class="ri-bar-chart-box-line me-2"></i>
                        Reportes
                    </a>
                </li>

                <!-- Sistema -->
                <li class="mt-3">
                    <a href="#" class="nav-link">
                        <i class="ri-settings-3-line me-2"></i>
                        Configuración
                    </a>
                </li>

            </ul>

        </div>

    </div>
</div>