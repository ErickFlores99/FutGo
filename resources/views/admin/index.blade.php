@extends('admin.template.layouts.app')

@section('title', 'Home')

@section('js')
    <script src="{{ asset('admin/competencia/crear.js') }}"></script>
    <script src="{{ asset('admin/competencia/lista.js') }}"></script>
@endsection

@section('content')

@include('admin.competencia.modals.crear_competencia')

<!-- ===========================
CABECERA
============================ -->
<div class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-center gap-3 mb-4">

    <div>
        <h3 class="fw-bold mb-1">
            Panel General
        </h3>

        <p class="text-muted mb-0">
            Bienvenido al panel administrativo de FutGo.
        </p>
    </div>

    <button
        class="btn btn-success rounded-4 px-4"
        data-bs-toggle="modal"
        data-bs-target="#crearCompetencia">

        <i class="ri-add-circle-line me-1"></i>

        Nueva Competencia

    </button>

</div>

<!-- ===========================
RESUMEN GENERAL
============================ -->

<div class="row g-3 mb-4">

    <div class="col-sm-6 col-xl-3">

        <div class="card border-0 shadow-sm rounded-4">

            <div class="card-body">

                <div class="d-flex justify-content-between">

                    <div>

                        <small class="text-muted">
                            Competencias
                        </small>

                        <h2 class="fw-bold mb-0">
                            5
                        </h2>

                    </div>

                    <div class="fs-2 text-success">
                        <i class="ri-trophy-line"></i>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="col-sm-6 col-xl-3">

        <div class="card border-0 shadow-sm rounded-4">

            <div class="card-body">

                <div class="d-flex justify-content-between">

                    <div>

                        <small class="text-muted">
                            Equipos
                        </small>

                        <h2 class="fw-bold mb-0">
                            42
                        </h2>

                    </div>

                    <div class="fs-2 text-primary">
                        <i class="ri-team-line"></i>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="col-sm-6 col-xl-3">

        <div class="card border-0 shadow-sm rounded-4">

            <div class="card-body">

                <div class="d-flex justify-content-between">

                    <div>

                        <small class="text-muted">
                            Partidos
                        </small>

                        <h2 class="fw-bold mb-0">
                            108
                        </h2>

                    </div>

                    <div class="fs-2 text-warning">
                        <i class="ri-football-line"></i>
                    </div>

                </div>

            </div>

        </div>

    </div>

    <div class="col-sm-6 col-xl-3">

        <div class="card border-0 shadow-sm rounded-4">

            <div class="card-body">

                <div class="d-flex justify-content-between">

                    <div>

                        <small class="text-muted">
                            Jornadas
                        </small>

                        <h2 class="fw-bold mb-0">
                            18
                        </h2>

                    </div>

                    <div class="fs-2 text-danger">
                        <i class="ri-calendar-event-line"></i>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- ===========================
COMPETENCIAS
============================ -->

<div class="mb-4">

    <div class="d-flex justify-content-between align-items-center mb-3">

        <div>

            <h5 class="fw-bold mb-0">

                Mis Competencias

            </h5>

            <small class="text-muted">

                Selecciona una competencia para administrarla.

            </small>

        </div>

    </div>

    <div id="seccion_competencias"></div>

</div>

<!-- ===========================
SECCIÓN INFERIOR
============================ -->

<div class="row g-4">

    <!-- Acciones rápidas -->

    <div class="col-lg-4">

        <div class="card shadow-sm border-0 rounded-4 h-100">

            <div class="card-header bg-white">

                <h6 class="fw-bold mb-0">

                    Acciones rápidas

                </h6>

            </div>

            <div class="card-body">

                <div class="d-grid gap-2">

                    <button class="btn btn-outline-success">
                        <i class="ri-team-line me-2"></i>
                        Registrar Equipo
                    </button>

                    <button class="btn btn-outline-primary">
                        <i class="ri-calendar-check-line me-2"></i>
                        Crear Jornada
                    </button>

                    <button class="btn btn-outline-warning">
                        <i class="ri-calendar-line me-2"></i>
                        Generar Calendario
                    </button>

                    <button class="btn btn-outline-dark">
                        <i class="ri-settings-3-line me-2"></i>
                        Configuración General
                    </button>

                </div>

            </div>

        </div>

    </div>

    <!-- Actividad -->

    <div class="col-lg-4">

        <div class="card shadow-sm border-0 rounded-4 h-100">

            <div class="card-header bg-white">

                <h6 class="fw-bold mb-0">

                    Actividad Reciente

                </h6>

            </div>

            <div class="card-body">

                <ul class="list-group list-group-flush">

                    <li class="list-group-item px-0">

                        <strong>Liga Premier</strong><br>

                        <small class="text-muted">
                            Competencia creada hace 10 minutos.
                        </small>

                    </li>

                    <li class="list-group-item px-0">

                        <strong>Atlas FC</strong><br>

                        <small class="text-muted">
                            Equipo registrado correctamente.
                        </small>

                    </li>

                    <li class="list-group-item px-0">

                        <strong>Jornada 1</strong><br>

                        <small class="text-muted">
                            Calendario generado.
                        </small>

                    </li>

                </ul>

            </div>

        </div>

    </div>

    <!-- Pendientes -->

    <div class="col-lg-4">

        <div class="card shadow-sm border-0 rounded-4 h-100">

            <div class="card-header bg-white">

                <h6 class="fw-bold mb-0">

                    Competencias por configurar

                </h6>

            </div>

            <div class="card-body">

                <div class="alert alert-warning">

                    <strong>Liga Infantil</strong>

                    <br>

                    Falta registrar equipos.

                </div>

                <div class="alert alert-info">

                    <strong>Copa Verano</strong>

                    <br>

                    Aún no tiene jornadas.

                </div>

                <div class="alert alert-danger">

                    <strong>Liga Empresarial</strong>

                    <br>

                    Pendiente generar calendario.

                </div>

            </div>

        </div>

    </div>

</div>

<!-- ===========================
TABLA GENERAL
============================ -->

<div class="card border-0 shadow-sm rounded-4 mt-4">

    <div class="card-header bg-white d-flex justify-content-between align-items-center">

        <div>

            <h5 class="fw-bold mb-0">

                Todas las Competencias

            </h5>

            <small class="text-muted">

                Consulta rápida de las competencias registradas.

            </small>

        </div>

    </div>

    <div class="table-responsive">

        <table class="table align-middle mb-0">

            <thead class="table-light">

                <tr>

                    <th>Competencia</th>

                    <th>Categoría</th>

                    <th>Estado</th>

                    <th>Equipos</th>

                    <th>Inicio</th>

                    <th class="text-end">Acciones</th>

                </tr>

            </thead>

            <tbody>

                <tr>

                    <td>Liga Premier</td>

                    <td>Libre</td>

                    <td>

                        <span class="badge bg-success">

                            Activa

                        </span>

                    </td>

                    <td>16</td>

                    <td>10 Ago 2026</td>

                    <td class="text-end">

                        <button class="btn btn-sm btn-outline-success">

                            Administrar

                        </button>

                    </td>

                </tr>

                <tr>

                    <td>Copa Verano</td>

                    <td>Juvenil</td>

                    <td>

                        <span class="badge bg-warning text-dark">

                            Configuración

                        </span>

                    </td>

                    <td>8</td>

                    <td>20 Ago 2026</td>

                    <td class="text-end">

                        <button class="btn btn-sm btn-outline-success">

                            Administrar

                        </button>

                    </td>

                </tr>

            </tbody>

        </table>

    </div>

</div>

@endsection

