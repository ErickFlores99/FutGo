@extends('admin.template.layouts.app')

@section('title', $competencia->tipo->nombre . ' ' . $competencia->nombre)

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
                class="text-decoration-none text-reset">
                <i class="ri-home-4-line me-1"></i>
                Inicio
            </a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('competencias.index') }}"
                class="text-decoration-none text-reset">
                Competencias
            </a>
        </li>
        <li class="breadcrumb-item active">
            {{ $competencia->tipo->nombre }} {{ $competencia->nombre }}
        </li>
    </ol>
</nav>

<!-- ==========================================
CABECERA COMPETENCIA
========================================== -->
<div class="card border-0 shadow-sm rounded-4 mb-4">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
            <div>
                <h2 class="fw-bold mb-2">
                    {{ $competencia->tipo->nombre }} {{ $competencia->nombre }}
                </h2>
                <div class="d-flex flex-wrap gap-2">
                    <!-- Estado -->
                    <span class="badge rounded-pill 
                        @switch($competencia->estatus)

                            @case(0)
                                bg-warning
                                @break

                            @case(1)
                                bg-success
                                @break

                            @case(2)
                                bg-secondary
                                @break

                            @case(3)
                                bg-primary
                                @break

                            @case(4)
                                bg-danger
                                @break

                            @default
                                bg-dark

                        @endswitch
                    ">
                        @switch($competencia->estatus)

                            @case(0)
                                Configuración
                                @break

                            @case(1)
                                Activa
                                @break

                            @case(2)
                                Suspendida
                                @break

                            @case(3)
                                Finalizada
                                @break

                            @case(4)
                                Cancelada
                                @break

                        @endswitch
                    </span>
                </div>
                <p class="text-muted mt-3 mb-0">
                    {{ $competencia->descripcion }}
                </p>
            </div>
            <div>
                <button class="btn btn-outline-success rounded-3">
                    <i class="ri-edit-line me-1"></i>
                    Editar
                </button>
            </div>
        </div>
    </div>
</div>

<!-- ==========================================
RESUMEN
========================================== -->
<div class="row g-3 mb-4">
    <div class="col-6 col-lg-3">
        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-body text-center">
                <i class="ri-group-line fs-2 text-primary"></i>
                <h3 class="fw-bold mb-0">
                    {{ $competencia->grupos->count() }}
                </h3>
                <small class="text-muted">
                    Grupos
                </small>
            </div>
        </div>
    </div>

    <div class="col-6 col-lg-3">
        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-body text-center">
                <i class="ri-team-line fs-2 text-success"></i>
                <h3 class="fw-bold mb-0">
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
                <i class="ri-calendar-line fs-2 text-warning"></i>
                <h3 class="fw-bold mb-0">
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
                <i class="ri-football-line fs-2 text-danger"></i>
                <h3 class="fw-bold mb-0">
                    0
                </h3>
                <small class="text-muted">
                    Partidos
                </small>
            </div>
        </div>
    </div>
</div>

<!-- ==========================================
MENU COMPETENCIA
========================================== -->
<div class="card border-0 shadow-sm rounded-4 mb-4">
    <div class="card-body p-2">
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <a class="nav-link active">
                    <i class="ri-dashboard-line"></i>
                    Resumen
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link">
                    <i class="ri-team-line"></i>
                    Equipos
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link">
                    <i class="ri-group-line"></i>
                    Grupos
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link">
                    <i class="ri-football-line"></i>
                    Partidos
                </a>
            </li>
        </ul>
    </div>
</div>

<!-- ==========================================
GRUPOS
========================================== -->
<div class="mb-3">
    <h4 class="fw-bold">
        Grupos de competencia
    </h4>
    <p class="text-muted">
        Configuración deportiva de la competencia.
    </p>
</div>

<div class="row g-3">
    @forelse($competencia->grupos as $grupo)

        <div class="col-md-6 col-xl-4">
            <div class="card border-0 shadow-sm rounded-4 h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="fw-bold">
                            Grupo {{ $loop->iteration }}
                        </h5>

                         <span class="badge rounded-pill 
                            @switch($grupo->estatus)

                                @case(0)
                                    bg-warning
                                    @break

                                @case(1)
                                    bg-success
                                    @break

                                @case(2)
                                    bg-secondary
                                    @break

                                @default
                                    bg-dark

                            @endswitch
                        ">
                            @switch($competencia->estatus)

                                @case(0)
                                    Configuración
                                    @break

                                @case(1)
                                    Activa
                                    @break

                                @case(2)
                                    Suspendida
                                    @break

                                @case(4)
                                    Cancelada
                                    @break

                            @endswitch
                        </span>
                    </div>

                    <hr>

                    <div class="mb-2">
                        <small class="text-muted">
                            Categoría
                        </small>

                        <div class="fw-semibold">
                            {{ $grupo->categoria->nombre }}
                        </div>
                    </div>

                    <div class="mb-2">
                        <small class="text-muted">
                            División
                        </small>

                        <div class="fw-semibold">
                            {{ $grupo->division->nombre }}
                        </div>
                    </div>

                    <div class="mb-3">
                        <small class="text-muted">
                            Género
                        </small>

                        <div class="fw-semibold">
                            {{ $grupo->genero->nombre }}
                        </div>
                    </div>

                    <a href="{{ route('grupos.detalle',
                            [
                                'competencia' => $competencia->id,
                                'grupo' => $grupo->id
                            ]
                        ) }}"
                        class="btn btn-outline-success w-100 rounded-pill">

                        <i class="ri-settings-3-line me-1"></i>

                        Administrar grupo

                    </a>
                </div>
            </div>
        </div>

    @empty

        <div class="col-12">
            <div class="alert alert-info">
                No existen grupos registrados para esta competencia.
            </div>
        </div>
        
    @endforelse
</div>


@endsection