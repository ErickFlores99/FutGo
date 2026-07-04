<div class="offcanvas-lg offcanvas-start flex-shrink-0 p-3 rounded-bottom-lg-3 shadow-sm" 
    tabindex="-1" 
    id="sidebarMenu" 
    aria-labelledby="sidebarMenuLabel" 
    style="width: 180px;">
    
    <!-- Encabezado del Sidebar (Solo visible en móviles para poder cerrarlo) -->
    <div class="offcanvas-header d-lg-none">
        <h5 class="offcanvas-title text-success fw-bold" id="sidebarMenuLabel">FutGo</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
    </div>

    <!-- Contenido del Sidebar (Visible siempre en PC, colapsable en móvil) -->
    <div class="offcanvas-body d-flex flex-column p-0">
       <a href="#" class="d-none d-lg-flex align-items-center justify-content-center w-100 mb-3 text-decoration-none">
            <span class="fs-4 fw-bold text-success">FutGo</span> 
        </a>

        <br>
        
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item"> 
                <a href="#" class="nav-link active bg-success text-black" aria-current="page">
                    Home
                </a> 
            </li>

            <hr class="text-black">

            <li>
                <a href="#" class="nav-link text-black">Partidos</a>
            </li>
            <li>
                <a href="#" class="nav-link text-black">Equipos</a>
            </li>
        </ul>
        <hr class="text-black">
    </div>
</div>