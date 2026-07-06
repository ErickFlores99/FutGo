@extends('admin.template.layouts.app')

@section('content')
<!-- Cabecera con título y acción global -->
<div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-3 mb-4">
    <div>
        <h4 class="fw-bold text-dark mb-1">Panel General de Competencias</h4>
        <p class="text-muted small mb-0">Monitoreo global y administración rápida de ligas y categorías en FutGo.</p>
    </div>
    <div>
        <button class="btn btn-success fw-bold px-3 btn-sm d-flex align-items-center gap-1" data-bs-toggle="modal" data-bs-target="#crearCompetenciaModal">
            <span>+</span> Registrar Nueva Competencia
        </button>
    </div>
</div>

<!-- SECCIÓN 1: Tarjetas de Resumen Dinámico (Scroll horizontal automático en móviles) -->
<div class="row g-3 mb-4 flex-nowrap overflow-auto pb-2 flex-md-wrap overflow-md-hidden">
    
    <!-- Card Liga 1 (Filtro Activo) -->
    <div class="col-11 col-sm-6 col-md-4 col-xl-3" style="min-width: 240px;">
        <div class="card border border-success bg-success-subtle bg-opacity-10 rounded-4 p-3 shadow-sm position-relative cursor-pointer">
            <span class="position-absolute top-0 end-0 m-3 badge bg-success rounded-pill">Activa</span>
            <h6 class="fw-bold text-success mb-1">Liga Premier</h6>
            <p class="text-muted small mb-3">Nivel Nacional</p>
            <div class="d-flex justify-content-between align-items-center border-top pt-2">
                <span class="small text-dark fw-semibold">3 Categorías</span>
                <span class="small text-muted">28 Equipos</span>
            </div>
        </div>
    </div>

    <!-- Card Liga 2 -->
    <div class="col-11 col-sm-6 col-md-4 col-xl-3" style="min-width: 240px;">
        <div class="card border bg-white rounded-4 p-3 shadow-sm position-relative cursor-pointer hover-shadow transition">
            <span class="position-absolute top-0 end-0 m-3 badge bg-secondary rounded-pill">Activa</span>
            <h6 class="fw-bold text-dark mb-1">Liga Regional</h6>
            <p class="text-muted small mb-3">Jalisco / Occidente</p>
            <div class="d-flex justify-content-between align-items-center border-top pt-2">
                <span class="small text-dark fw-semibold">2 Categorías</span>
                <span class="small text-muted">14 Equipos</span>
            </div>
        </div>
    </div>

    <!-- Card Liga 3 -->
    <div class="col-11 col-sm-6 col-md-4 col-xl-3" style="min-width: 240px;">
        <div class="card border bg-white rounded-4 p-3 shadow-sm position-relative cursor-pointer">
            <span class="position-absolute top-0 end-0 m-3 badge bg-success rounded-pill">Activa</span>
            <h6 class="fw-bold text-dark mb-1">Copa Universitaria</h6>
            <p class="text-muted small mb-3">Intercolegial</p>
            <div class="d-flex justify-content-between align-items-center border-top pt-2">
                <span class="small text-dark fw-semibold">1 Categoría</span>
                <span class="small text-muted">8 Equipos</span>
            </div>
        </div>
    </div>

    <!-- Card Liga 4 (Inactiva o Pausada) -->
    <div class="col-11 col-sm-6 col-md-4 col-xl-3" style="min-width: 240px;">
        <div class="card border bg-white rounded-4 p-3 shadow-sm opacity-75 position-relative">
            <span class="position-absolute top-0 end-0 m-3 badge bg-warning text-dark rounded-pill">En Pausa</span>
            <h6 class="fw-bold text-muted mb-1">Liga Nocturna</h6>
            <p class="text-muted small mb-3">Fútbol 7 Amateur</p>
            <div class="d-flex justify-content-between align-items-center border-top pt-2">
                <span class="small text-dark fw-semibold">0 Categorías</span>
                <span class="small text-muted">0 Equipos</span>
            </div>
        </div>
    </div>
</div>

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