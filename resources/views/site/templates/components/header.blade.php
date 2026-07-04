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
                
                @auth
                    <!-- Si el usuario YA está autenticado, lo mandamos al panel -->
                    <a href="{{ route('appIndex') }}" class="btn btn-sm btn-success w-100 w-lg-auto ms-lg-2">Ir a Panel</a>
                @endauth

                @guest
                    <!-- Si el usuario es un invitado (no se ha logueado), ve el botón de Login -->
                    <a href="{{ route('login') }}" class="btn btn-sm btn-outline-success w-100 w-lg-auto ms-lg-2">Login</a>
                @endguest
            </div>

        </div>
    </div>
</nav>