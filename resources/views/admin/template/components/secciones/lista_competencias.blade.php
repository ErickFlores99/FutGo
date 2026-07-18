<!-- Lista de Competencias -->
<div class="row g-3 mb-3">
    @foreach($competencias as $competencia)
        <div class="col-12 col-md-6 col-xl-4">
            <div class="card border-0 shadow-sm rounded-4 h-100">
                <div class="card-body p-4 position-relative">
                    <!-- Estado -->
                    <span class="position-absolute top-0 end-0 m-3 badge rounded-pill 
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
                                Pendiente
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

                    <!-- Encabezado -->
                    <div class="mb-3 pe-5">
                        <small class="text-muted">
                            {{ $competencia->tipo->nombre }}
                        </small>
                        <h5 class="fw-bold mb-0 text-success">
                            {{ $competencia->nombre }}
                        </h5>
                    </div>

                    <!-- Fechas -->
                    <div class="small text-muted mb-3">
                        <i class="ti ti-calendar me-1"></i>
                        {{ $competencia->fecha_inicio?->format('d/m/Y') }}
                        -
                        {{ $competencia->fecha_fin?->format('d/m/Y') }}
                    </div>

                    <!-- Grupos -->
                    <div class="mb-3">
                        <h6 class="fw-semibold">
                            Grupos
                        </h6>

                        @foreach($competencia->grupos->take(3) as $grupo)
                            <div class="bg-light rounded-3 p-2 mb-2">
                                <div class="fw-semibold small">
                                    {{ $grupo->genero->nombre }}
                                    -
                                    {{ $grupo->categoria->nombre }}
                                </div>
                                <div class="text-muted small">
                                    División:
                                    {{ $grupo->division->nombre }}
                                </div>
                            </div>
                        @endforeach

                        @if($competencia->grupos->count() > 3)
                            <small class="text-muted">
                                + {{ $competencia->grupos->count() - 3 }}
                                grupos más...
                            </small>
                        @endif
                    </div>

                    <!-- Footer -->
                    <div class="border-top pt-3 d-flex justify-content-between align-items-center">
                        <span class="small fw-semibold">
                            <i class="ti ti-category me-1"></i>
                            {{ $competencia->grupos->count() }}
                            grupos
                        </span>
                        <a href="#"
                           class="btn btn-sm btn-outline-success rounded-pill">
                            Ver detalle
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>