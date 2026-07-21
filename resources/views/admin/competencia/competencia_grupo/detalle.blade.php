@extends('admin.template.layouts.app')


@section('js')

@endsection



@section('content')

<!-- ==========================================
BREADCRUMB
========================================== -->
<nav aria-label="breadcrumb" class="mb-3">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="{{ route('appIndex') }}"
               class="text-decoration-none">
                <i class="ri-home-4-line me-1"></i>
                Inicio
            </a>
        </li>

        <li class="breadcrumb-item">
            <a href="{{ route('competencias.index') }}">
                Competencias
            </a>
        </li>

        <li class="breadcrumb-item">
            <a href="{{ route(
                'competencias.detalle',
                $competencia
            ) }}">
                {{ $competencia->tipo->nombre }} {{ $competencia->nombre }}
            </a>
        </li>

        <li class="breadcrumb-item active">
            {{ $grupo->categoria->nombre }} {{ $grupo->genero->nombre }} 
        </li>
    </ol>
</nav>

<!-- ==========================================
CABECERA DEL GRUPO
========================================== -->
<div class="card border-0 shadow-sm rounded-4 mb-4">
    <div class="card-body">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="d-flex align-items-center gap-3">
                    <div class="bg-success-subtle rounded-circle p-3">
                        <i class="ri-group-line fs-2 text-success"></i>
                    </div>

                    <div>
                        <h2 class="fw-bold mb-1">
                            {{ $competencia->tipo->nombre }} {{ $competencia->nombre }}
                        </h2>
                        
                        <p class="text-muted mb-0">
                            {{ $grupo->categoria->nombre }} |
                            {{ $grupo->genero->nombre }} |
                            {{ $grupo->division->nombre }} |
                            
                            @if($grupo->estatus == 1)
                                <span class="badge bg-success">
                                    Activo
                                </span>
                            @else
                                <span class="badge bg-secondary">
                                    Inactivo
                                </span>
                            @endif
                        </p>
                        <p class="text-muted mb-0">
                            
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                <button class="btn btn-outline-success rounded-3">
                    <i class="ri-edit-line me-1"></i>
                    Editar grupo
                </button>
            </div>
        </div>
    </div>
</div>

<!-- ==========================================
RESUMEN GRUPO
========================================== -->
<div class="row g-3 mb-4">
    <div class="col-6 col-lg-3">
        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-body text-center">
                <i class="ri-team-line fs-2 text-primary"></i>
                <h3 class="fw-bold mb-0 mt-2">
                    0
                </h3>
                <small class="text-muted">
                    Equipos
                </small>
            </div>
        </div>
    </div>
    <div class="col-6 col-lg-3">
        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-body text-center">
                <i class="ri-football-line fs-2 text-success"></i>
                <h3 class="fw-bold mb-0 mt-2">
                    0   
                </h3>
                <small class="text-muted">
                    Partidos
                </small>
            </div>
        </div>
    </div>
    <div class="col-6 col-lg-3">
        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-body text-center">
                <i class="ri-calendar-line fs-2 text-warning"></i>
                <h3 class="fw-bold mb-0 mt-2">
                    0
                </h3>
                <small class="text-muted">
                    Jornadas
                </small>
            </div>
        </div>
    </div>
    <div class="col-6 col-lg-3">
        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-body text-center">
                <i class="ri-trophy-line fs-2 text-danger"></i>
                <h3 class="fw-bold mb-0 mt-2">
                    0
                </h3>
                <small class="text-muted">
                    Tabla
                </small>
            </div>
        </div>
    </div>
</div>

<!-- ==========================================
MENU DEL GRUPO
========================================== -->
<div class="card border-0 shadow-sm rounded-4 mb-4">
    <div class="card-body p-2">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link active">
                    <i class="ri-dashboard-line me-1"></i>
                    Resumen
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link">
                    <i class="ri-team-line me-1"></i>
                    Equipos
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link">
                    <i class="ri-bar-chart-line me-1"></i>
                    Tabla
                </a>    
            </li>
            <li class="nav-item">
                <a class="nav-link">
                    <i class="ri-calendar-line me-1"></i>
                    Jornadas
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link">
                    <i class="ri-football-line me-1"></i>
                    Partidos
                </a>
            </li>
        </ul>
    </div>
</div>

<!-- ==========================================
CONTENIDO
========================================== -->
<div class="card border-0 shadow-sm rounded-4">
    <div class="card-body">
        <h5 class="fw-bold">
            Resumen del grupo
        </h5>
        <p class="text-muted">
            Desde este módulo podrás administrar los equipos,
            generar jornadas, registrar resultados y consultar
            la tabla de posiciones del grupo.
        </p>
    </div>
</div>

@endsection