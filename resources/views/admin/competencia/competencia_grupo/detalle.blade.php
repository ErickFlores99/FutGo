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
CONFIGURACIÓN INICIAL
========================================== -->
    @php
        $fondo = 'warning';

        if($grupo->estatus != 0){
            $fondo = 'success';
        }
    @endphp   
    <div class="card border-{{ $fondo }} shadow-sm rounded-4 mb-4">
        <div class="card-header bg-{{ $fondo }}-subtle border-0 py-3">
            <div class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-center">
                <div>
                    <div class="d-flex align-items-center mb-2">
                        <div class="bg-{{ $fondo }} rounded-circle p-2 me-3">
                            <i class="ri-settings-3-line text-white fs-5"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-0">
                                Configuración inicial
                            </h5>
                            @if($grupo->estatus == 0)
                                <small class="text-muted">
                                    
                                    Esta {{ strtolower($competencia->tipo->nombre) }} aún no ha sido activada.
                                </small>
                            @endif
                        </div>
                    </div>
                    <small class="text-muted">
                        @if($grupo->estatus == 0)
                            Completa la configuración para habilitar el registro de equipos,
                            generación de jornadas y calendario.

                        @elseif($grupo->estatus == 1)
                            La competencia se encuentra activa.
                            Puedes administrar equipos, jornadas y partidos.

                        @elseif($grupo->estatus == 2)
                            La competencia se encuentra suspendida.

                        @elseif($grupo->estatus == 3)
                            La competencia ha finalizado.

                        @elseif($grupo->estatus == 4)
                            La competencia ha sido cancelada.

                        @endif
                    </small>
                </div>

                <div class="d-flex gap-2 mt-3 mt-lg-0">
                    <button
                        class="btn btn-outline-secondary"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#configuracionGrupo"
                        aria-expanded="false"
                        @disabled($grupo->estatus == 1)>

                        <i class="ri-settings-3-line me-1"></i>
                        Configurar
                    </button>

                    @if($grupo->estatus == 0)
                        <button
                            class="btn btn-success">

                            <i class="ri-play-circle-line me-1"></i>
                            Activar {{ $competencia->tipo->nombre }}
                        </button>
                    @endif
                </div>
            </div>
        </div>

        {{-- ==========================================
        RESUMEN
        ========================================== --}}
        <div class="card-body border-bottom">
            <div class="row text-center g-3">
                <div class="col-md-3">
                    <div class="border rounded-3 p-3 h-100">
                        <i class="ri-calendar-check-line fs-2 text-primary"></i>
                        <h6 class="mt-2 mb-1">
                            Fechas
                        </h6>
                        <small class="text-muted d-block">
                            Inicio:
                            @if($grupo->fecha_inicio)
                                {{ \Carbon\Carbon::parse($grupo->fecha_inicio)->format('d/m/Y') }}
                            @else
                                <span class="text-danger fw-semibold">
                                    Pendiente
                                </span>
                            @endif
                        </small>
                        <small class="text-muted d-block mt-1">
                            Fin:
                            @if($grupo->fecha_fin)
                                {{ \Carbon\Carbon::parse($grupo->fecha_fin)->format('d/m/Y') }}
                            @else
                                <span class="text-danger fw-semibold">
                                    Pendiente
                                </span>
                            @endif
                        </small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="border rounded-3 p-3 h-100">
                        <i class="ri-time-line fs-2 text-success"></i>
                        <h6 class="mt-2 mb-2">
                            Días
                        </h6>
                        @if($grupo->dias->count())
                            @foreach($grupo->dias as $dia)
                                <small class="text-muted">
                                    @switch($dia->dia)
                                        @case(1)
                                            Lunes
                                            @break

                                        @case(2)
                                            Martes
                                            @break

                                        @case(3)
                                            Miercoles
                                            @break
                                        
                                        @case(4)
                                            Jueves
                                            @break
                                        
                                        @case(5)
                                            Viernes
                                            @break
                                        
                                        @case(6)
                                            Sabado
                                            @break

                                        @case(7)
                                            Domingo
                                            @break
                                    @endswitch
                                </small>
                            @endforeach
                        @else
                            <small class="text-danger">
                                Pendiente
                            </small>
                        @endif
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="border rounded-3 p-3 h-100">
                        <i class="ri-trophy-line fs-2 text-warning"></i>
                        <h6 class="mt-2 mb-1">
                            Tipo
                        </h6>
                        <small class="text-muted">
                            {{ $competencia->tipo->nombre }}
                        </small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="border rounded-3 p-3 h-100">
                        <i class="ri-team-line fs-2 text-info"></i>
                        <h6 class="mt-2 mb-1">
                            Equipos
                        </h6>
                        <small class="text-muted">
                            0 registrados
                        </small>
                    </div>
                </div>
            </div>
        </div>

        {{-- ==========================================
        FORMULARIO
        ========================================== --}}
        <div class="collapse" id="configuracionGrupo">
            <div class="card-body">
                <div class="row g-4">

                    <div class="col-md-6">
                        <label class="form-label fw-semibold">
                            Fecha de inicio
                        </label>
                        <input
                            type="date"
                            name="fecha_inicio"
                            class="form-control"
                            value="{{ $grupo->fecha_inicio }}">

                    </div>
                    
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">
                            Fecha de finalización
                        </label>
                        <input
                            type="date"
                            name="fecha_fin"
                            class="form-control"
                            value="{{ $grupo->fecha_fin }}">
                    </div>
                    
                    <div class="col-md-6">
                        <label class="form-label fw-semibold">
                            Días de juego
                        </label>
                        <select
                            class="form-select select2"
                            name="dias[]"
                            multiple>

                            @foreach($dias as $valor => $nombre)
                                <option
                                    value="{{ $valor }}"
                                    @selected($grupo->dias->contains('dia', $valor))>
                                    {{ $nombre }}
                                </option>
                            @endforeach
                        </select>
                        <small class="text-muted">
                            Selecciona uno o más días.
                        </small>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label fw-semibold">
                            Tipo de competencia
                        </label>
                        <select
                            class="form-select select2"
                            name="tipo_competencia">
                            @foreach($tiposCompetencia as $tipo)
                                <option
                                    value="{{ $tipo->id }}"
                                    @selected($tipo->id == $competencia->tipo->id)>
                                    {{ $tipo->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <hr>

                <div class="text-end">
                    <button
                        class="btn btn-success">
                        <i class="ri-save-line me-1"></i>
                        Guardar configuración
                    </button>
                </div>
            </div>
        </div>
    </div>

<!-- ==========================================
MÓDULOS DEL GRUPO
========================================== -->
<div class="row g-4">

    <!-- EQUIPOS -->

    <div class="col-md-6 col-xl-4">

        <div class="card border-0 shadow-sm rounded-4 h-100">

            <div class="card-body">

                <div class="d-flex align-items-center mb-3">

                    <div class="bg-primary-subtle rounded-circle p-3">

                        <i class="ri-team-line fs-3 text-primary"></i>

                    </div>


                    <h5 class="fw-bold ms-3 mb-0">
                        Equipos
                    </h5>

                </div>


                <p class="text-muted">

                    Registra y administra los equipos
                    participantes del torneo.

                </p>


                <button class="btn btn-outline-primary btn-sm">

                    <i class="ri-add-line me-1"></i>

                    Registrar equipo

                </button>


            </div>

        </div>

    </div>



    <!-- JUGADORES -->

    <div class="col-md-6 col-xl-4">

        <div class="card border-0 shadow-sm rounded-4 h-100">

            <div class="card-body">


                <div class="d-flex align-items-center mb-3">

                    <div class="bg-success-subtle rounded-circle p-3">

                        <i class="ri-user-star-line fs-3 text-success"></i>

                    </div>


                    <h5 class="fw-bold ms-3 mb-0">
                        Jugadores
                    </h5>

                </div>


                <p class="text-muted">

                    Administra registros,
                    documentos y plantillas.

                </p>


                <button class="btn btn-outline-success btn-sm">

                    Administrar jugadores

                </button>


            </div>

        </div>

    </div>




    <!-- CUERPOS TECNICOS -->

    <div class="col-md-6 col-xl-4">

        <div class="card border-0 shadow-sm rounded-4 h-100">

            <div class="card-body">


                <div class="d-flex align-items-center mb-3">

                    <div class="bg-warning-subtle rounded-circle p-3">

                        <i class="ri-user-settings-line fs-3 text-warning"></i>

                    </div>


                    <h5 class="fw-bold ms-3 mb-0">
                        Cuerpo técnico
                    </h5>

                </div>


                <p class="text-muted">

                    Registra entrenadores,
                    auxiliares y responsables.

                </p>


                <button class="btn btn-outline-warning btn-sm">

                    Administrar

                </button>


            </div>

        </div>

    </div>




    <!-- CALENDARIO -->

    <div class="col-md-6 col-xl-4">

        <div class="card border-0 shadow-sm rounded-4 h-100">

            <div class="card-body">


                <div class="d-flex align-items-center mb-3">

                    <div class="bg-info-subtle rounded-circle p-3">

                        <i class="ri-calendar-event-line fs-3 text-info"></i>

                    </div>


                    <h5 class="fw-bold ms-3 mb-0">
                        Calendario
                    </h5>

                </div>


                <p class="text-muted">

                    Generación de jornadas,
                    partidos y horarios.

                </p>


                <button class="btn btn-outline-info btn-sm">

                    Generar calendario

                </button>


            </div>

        </div>

    </div>




    <!-- ESTADISTICAS -->

    <div class="col-md-6 col-xl-4">


        <div class="card border-0 shadow-sm rounded-4 h-100">


            <div class="card-body">


                <div class="d-flex align-items-center mb-3">


                    <div class="bg-danger-subtle rounded-circle p-3">

                        <i class="ri-bar-chart-box-line fs-3 text-danger"></i>

                    </div>


                    <h5 class="fw-bold ms-3 mb-0">
                        Estadísticas
                    </h5>


                </div>


                <p class="text-muted">

                    Resultados,
                    goleadores y posiciones.

                </p>


                <button class="btn btn-outline-danger btn-sm">

                    Ver estadísticas

                </button>


            </div>


        </div>


    </div>




    <!-- CONFIGURACION -->

    <div class="col-md-6 col-xl-4">


        <div class="card border-0 shadow-sm rounded-4 h-100">


            <div class="card-body">


                <div class="d-flex align-items-center mb-3">

                    <div class="bg-secondary-subtle rounded-circle p-3">

                        <i class="ri-settings-4-line fs-3 text-secondary"></i>

                    </div>


                    <h5 class="fw-bold ms-3 mb-0">
                        Configuración
                    </h5>

                </div>


                <p class="text-muted">

                    Parámetros específicos del torneo.

                </p>


                <button class="btn btn-outline-secondary btn-sm">

                    Configurar

                </button>


            </div>

        </div>


    </div>


</div>


@endsection