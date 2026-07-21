@extends('admin.template.layouts.app')

@section('js')
    <script src="{{ asset('admin/competencia/crear.js') }}"></script>
    <script src="{{ asset('admin/competencia/lista.js') }}"></script>
@endsection

@section('content')

@include('admin.competencia.modals.crear_competencia')

<!-- ==========================================
BREADCRUMB
========================================== -->
<nav aria-label="breadcrumb" class="mb-3">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="{{ route('appIndex') }}" class="text-decoration-none">
                <i class="ri-home-4-line me-1"></i> Inicio
            </a>
        </li>
        <li class="breadcrumb-item">
            Administración
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            Competencias
        </li>
    </ol>
</nav>

<!-- ==========================================
ENCABEZADO
========================================== -->
<div class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-center gap-3 mb-4">

    <div>
        <h2 class="fw-bold mb-1">
            Competencias
        </h2>

        <p class="text-muted mb-0">
            Administra las competencias, registra equipos y controla el desarrollo de los torneos.
        </p>
    </div>

    <button
        class="btn btn-success rounded-3 px-4"
        data-bs-toggle="modal"
        data-bs-target="#crearCompetencia">

        <i class="ri-add-circle-line me-1"></i>
        Nueva Competencia

    </button>

</div>

<!-- ==========================================
RESUMEN
========================================== -->
<div class="row g-3 mb-4">

    <div class="col-6 col-lg-3">
        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-body">

                <div class="text-muted small">
                    Competencias
                </div>

                <h3 class="fw-bold mb-0">
                    25
                </h3>

            </div>
        </div>
    </div>

    <div class="col-6 col-lg-3">
        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-body">

                <div class="text-muted small">
                    Activas
                </div>

                <h3 class="fw-bold text-success mb-0">
                    8
                </h3>

            </div>
        </div>
    </div>

    <div class="col-6 col-lg-3">
        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-body">

                <div class="text-muted small">
                    Próximas
                </div>

                <h3 class="fw-bold text-warning mb-0">
                    4
                </h3>

            </div>
        </div>
    </div>

    <div class="col-6 col-lg-3">
        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-body">

                <div class="text-muted small">
                    Finalizadas
                </div>

                <h3 class="fw-bold text-secondary mb-0">
                    13
                </h3>

            </div>
        </div>
    </div>

</div>

<!-- ==========================================
BUSQUEDA Y FILTROS
========================================== -->
<div class="card border-0 shadow-sm rounded-4 mb-4">

    <div class="card-body">

        <div class="row g-3 align-items-end">

            <div class="col-lg-5">

                <label class="form-label fw-semibold">
                    Buscar competencia
                </label>

                <div class="input-group">

                    <span class="input-group-text bg-white">
                        <i class="ri-search-line"></i>
                    </span>

                    <input
                        type="text"
                        class="form-control"
                        placeholder="Nombre de la competencia">

                </div>

            </div>

            <div class="col-lg-3">

                <label class="form-label fw-semibold">
                    Estado
                </label>

                <select class="form-select">

                    <option value="">Todos</option>
                    <option>Activa</option>
                    <option>Configuración</option>
                    <option>Finalizada</option>
                    <option>Cancelada</option>

                </select>

            </div>

            <div class="col-lg-2">

                <label class="form-label fw-semibold">
                    Categoría
                </label>

                <select class="form-select">

                    <option value="">Todas</option>

                </select>

            </div>

            <div class="col-lg-2 d-grid">

                <button class="btn btn-outline-secondary">

                    <i class="ri-filter-3-line me-1"></i>

                    Filtrar

                </button>

            </div>

        </div>

    </div>

</div>

<!-- ==========================================
LISTADO
========================================== -->
<div id="seccion_competencias">
    {{-- Aquí se cargarán las competencias mediante AJAX --}}
</div>

@endsection