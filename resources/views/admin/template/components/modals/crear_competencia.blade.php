<!-- Modal Crear Competencia -->
<div class="modal fade" id="crearCompetencia" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="crearCompetenciaLabel" aria-hidden="true">

    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 shadow">

            <!-- Encabezado -->
            <div class="modal-header">
                <h5 class="modal-title fw-semibold" id="crearCompetenciaLabel">
                    <i class="ti ti-trophy me-2"></i>
                    Nueva Competencia
                </h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Formulario -->
            <form id="formCompetencia" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row g-3">

                        <!-- Nombre -->
                        <div class="col-md-12">
                            <label class="form-label">Nombre</label>
                            <input type="text"
                                class="form-control"
                                name="nombre"
                                placeholder="Ej. Municipal"
                                required>
                            <div class="invalid-feedback"></div>
                        </div>

                        <!-- Tipo -->
                        <div class="col-md-6">
                            <label class="form-label">Tipo</label>
                            <select class="form-select select2" name="tipo_competencia_id" required>
                                <option value="">Seleccione...</option>

                                @foreach($tiposCompetencia as $tipo)
                                    <option value="{{ $tipo->id }}">
                                        {{ $tipo->nombre }}
                                    </option>
                                @endforeach

                            </select>

                            <div class="invalid-feedback"></div>
                        </div>

                        <!-- Categoría -->
                        <div class="col-md-6">
                            <label class="form-label">Categoría</label>
                            <select class="form-select select2" name="categoria_id" required>

                                <option value="">Seleccione...</option>

                                @foreach($categorias as $categoria)
                                    <option value="{{ $categoria->id }}">
                                        {{ $categoria->nombre }}
                                    </option>
                                @endforeach

                            </select>
                            <div class="invalid-feedback"></div>
                        </div>
                        
                        <!-- Género -->
                        <div class="col-md-6">
                            <label class="form-label">Division</label>
                            <select class="form-select select2" name="division_id">
                                <option value="">Seleccione...</option>

                                @foreach($divisiones as $division)
                                    <option value="{{ $division->id }}">
                                        {{ $division->nombre }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback"></div>
                        </div>

                        <!-- Fecha Inicio -->
                        <div class="col-md-6">
                            <label class="form-label">Fecha de inicio</label>
                            <input type="date"
                                class="form-control"
                                name="fecha_inicio">
                        </div>

                        <!-- Fecha Fin -->
                        <div class="col-md-6">
                            <label class="form-label">Fecha de finalización</label>
                            <input type="date"
                                class="form-control"
                                name="fecha_fin">
                        </div>

                        <!-- Dias Juego -->
                        <div class="col-md-12">
                            <label class="form-label">Dias de Juego</label>
                            <select class="form-select select2"
                                    multiple 
                                    name="dias_id[]"
                                    required
                            >
                                <option value="">Seleccione...</option>

                                <option value="1">Lunes</option>
                                <option value="2">Martes</option>
                                <option value="3">Miercoles</option>
                                <option value="4">Jueves</option>
                                <option value="5">Viernes</option>
                                <option value="6">Sabado</option>
                                <option value="7">Domingo</option>
                            </select>

                            <div class="invalid-feedback"></div>
                        </div>

                        <!-- Descripción -->
                        <div class="col-12">
                            <label class="form-label">Descripción</label>
                            <textarea
                                class="form-control"
                                rows="3"
                                name="descripcion"
                                placeholder="Información adicional de la competencia..."></textarea>
                        </div>
                    </div>
                </div>

                <!-- Pie -->
                <div class="modal-footer">
                    <button type="button"
                        class="btn btn-light rounded-4"
                        data-bs-dismiss="modal">
                        Cancelar
                    </button>

                    <button type="button"
                        class="btn btn-success rounded-4"
                        onclick="crearCompetencia()"
                    >
                        <i class="ti ti-device-floppy me-1"></i>
                        Guardar Competencia
                    </button>
                </div>
            </form>
            
        </div>
    </div>
</div>