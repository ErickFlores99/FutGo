@extends('admin.template.layouts.app')

@section('js')
    <script src="{{ asset('admin/app.js') }}"></script>
@endsection

@section('content')

@include('admin.template.components.modals.crear_competencia')

<!-- Cabecera con título y acción global -->
<div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-3 mb-4">
    <div>
        <h4 class="fw-bold text-dark mb-1">Panel General de Competencias</h4>
        <p class="text-muted small mb-0">Monitoreo global y administración rápida de ligas y categorías en FutGo.</p>
    </div>
    <div>
        <button class="btn btn-success fw-bold px-3 btn-sm d-flex align-items-center gap-1 rounded-4" data-bs-toggle="modal" data-bs-target="#crearCompetencia">
            <i class="ri-add-circle-line"></i>Nueva Competencia
        </button>
    </div>
</div>

<div id='seccion_competencias'></div>

<!-- SECCIÓN 2: Tabla Maestra Unificada con Filtros Avanzados -->
<div class="border rounded-4 bg-white p-3 shadow-sm">
    
    <!-- Barra de Herramientas de la Tabla (Filtros rápidos) -->
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-3 pb-3 border-bottom">
        <div class="d-flex align-items-center gap-2 flex-wrap">
            <span class="small text-muted fw-bold text-uppercase">Mostrar:</span>
            <button class="btn btn-sm btn-success rounded-pill px-3 fw-semibold">Todas</button>
            <button class="btn btn-sm btn-light border rounded-pill px-3">Solo Activas</button>
            <button class="btn btn-sm btn-light border rounded-pill px-3">Por Configurar</button>
        </div>
        <div class="text-muted small">
            Mostrando <strong>6</strong> categorías distribuidas en todas las competencias
        </div>
    </div>

    <!-- Tabla Responsiva Completa -->
    <div class="table-responsive">
        <table class="table align-middle table-hover mb-0">
            <thead class="table-light text-secondary small">
                <tr>
                    <th scope="col" class="ps-3 py-3">Liga Origen</th>
                    <th scope="col" class="py-3">Categoría / Subdivisión</th>
                    <th scope="col" class="py-3">Formato / Reglas</th>
                    <th scope="col" class="py-3 text-center">Equipos</th>
                    <th scope="col" class="py-3 text-end pe-3">Acciones</th>
                </tr>
            </thead>
            <tbody class="small">
                
                <!-- Registro 1 -->
                <tr>
                    <td class="ps-3 py-3">
                        <span class="badge text-bg-success rounded-pill px-2">Liga Premier</span>
                    </td>
                    <td class="py-3">
                        <span class="fw-bold text-dark d-block">Primera División Masculina</span>
                        <span class="text-muted text-xs">ID: #LP-01</span>
                    </td>
                    <td class="py-3 text-muted">Fútbol 11 • Tiempos de 45 min</td>
                    <td class="text-center py-3"><span class="badge text-bg-dark rounded px-2">16</span></td>
                    <td class="text-end pe-3 py-3">
                        <div class="d-flex gap-2 justify-content-end">
                            <a href="#" class="btn btn-sm btn-outline-success px-2 py-1" title="Gestionar Equipos">⚽ Equipos</a>
                            <button class="btn btn-sm btn-light border px-2 py-1" title="Editar"><span class="text-primary">✏️</span></button>
                            <button class="btn btn-sm btn-light border px-2 py-1" title="Eliminar"><span class="text-danger">🗑️</span></button>
                        </div>
                    </td>
                </tr>

                <!-- Registro 2 -->
                <tr>
                    <td class="ps-3 py-3">
                        <span class="badge text-bg-success rounded-pill px-2">Liga Premier</span>
                    </td>
                    <td class="py-3">
                        <span class="fw-bold text-dark d-block">Sub-20 Elite</span>
                        <span class="text-muted text-xs">ID: #LP-02</span>
                    </td>
                    <td class="py-3 text-muted">Fútbol 11 • Límite de edad año 2006+</td>
                    <td class="text-center py-3"><span class="badge text-bg-dark rounded px-2">12</span></td>
                    <td class="text-end pe-3 py-3">
                        <div class="d-flex gap-2 justify-content-end">
                            <a href="#" class="btn btn-sm btn-outline-success px-2 py-1">⚽ Equipos</a>
                            <button class="btn btn-sm btn-light border px-2 py-1">✏️</button>
                            <button class="btn btn-sm btn-light border px-2 py-1">🗑️</button>
                        </div>
                    </td>
                </tr>

                <!-- Registro 3 -->
                <tr>
                    <td class="ps-3 py-3">
                        <span class="badge text-bg-secondary rounded-pill px-2">Liga Regional</span>
                    </td>
                    <td class="py-3">
                        <span class="fw-bold text-dark d-block">Femenil Libre</span>
                        <span class="text-muted text-xs">ID: #LR-01</span>
                    </td>
                    <td class="py-3 text-muted">Fútbol 7 • Tiempos de 25 min</td>
                    <td class="text-center py-3"><span class="badge text-bg-dark rounded px-2">8</span></td>
                    <td class="text-end pe-3 py-3">
                        <div class="d-flex gap-2 justify-content-end">
                            <a href="#" class="btn btn-sm btn-outline-success px-2 py-1">⚽ Equipos</a>
                            <button class="btn btn-sm btn-light border px-2 py-1">✏️</button>
                            <button class="btn btn-sm btn-light border px-2 py-1">🗑️</button>
                        </div>
                    </td>
                </tr>

                <!-- Registro 4 -->
                <tr>
                    <td class="ps-3 py-3">
                        <span class="badge text-bg-dark rounded-pill px-2">Copa Uni</span>
                    </td>
                    <td class="py-3">
                        <span class="fw-bold text-dark d-block">Inter-Prepas Masculino</span>
                        <span class="text-muted text-xs">ID: #CU-01</span>
                    </td>
                    <td class="py-3 text-muted">Fútbol Rapido • Con Paredes</td>
                    <td class="text-center py-3"><span class="badge text-bg-dark rounded px-2">8</span></td>
                    <td class="text-end pe-3 py-3">
                        <div class="d-flex gap-2 justify-content-end">
                            <a href="#" class="btn btn-sm btn-outline-success px-2 py-1">⚽ Equipos</a>
                            <button class="btn btn-sm btn-light border px-2 py-1">✏️</button>
                            <button class="btn btn-sm btn-light border px-2 py-1">🗑️</button>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

</div>
    
@endsection 