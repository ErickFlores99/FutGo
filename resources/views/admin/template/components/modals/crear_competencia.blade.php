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
                        <div class="col-md-4">
                            <label class="form-label">Tipo</label>
                            <select class="form-select select2" name="tipo_competencia" required>
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
                        <div class="col-md-4">
                            <label class="form-label">Categoría</label>
                            <select class="form-select select2" 
                                multiple 
                                name="categorias[]"
                                required
                            >

                                <option value="">Seleccione...</option>

                                @foreach($categorias as $categoria)
                                    <option value="{{ $categoria->id }}">
                                        {{ $categoria->nombre }}
                                    </option>
                                @endforeach

                            </select>
                            <div class="invalid-feedback"></div>
                        </div>
                        
                        <!-- Division -->
                        <div class="col-md-4">
                            <label class="form-label">Division</label>
                            <select class="form-select select2" 
                                name="divisiones[]"
                                multiple 
                                required
                                >
                                <option value="">Seleccione...</option>

                                @foreach($divisiones as $division)
                                    <option value="{{ $division->id }}">
                                        {{ $division->nombre }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="invalid-feedback"></div>
                        </div>

                        <!-- Genero -->
                        <div class="col-md-4">
                            <label class="form-label">Género</label>

                            <select class="form-select select2"
                                    name="generos[]"
                                    multiple
                                    required>

                                @foreach($generos as $genero)
                                    <option value="{{ $genero->id }}">
                                        {{ $genero->nombre }}
                                    </option>
                                @endforeach

                            </select>

                            <div class="invalid-feedback"></div>
                        </div>

                        <!-- Dias Juego -->
                        <div class="col-md-4">
                            <label class="form-label">Dias de Juego</label>
                            <select class="form-select select2"
                                    multiple 
                                    name="dias[]"
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

                        <div class="col-md-4">
                            <div class="form-check">
                                <br>
                                <input
                                    class="form-check-input col-2"
                                    type="checkbox"
                                    id="es_nocturna"
                                    name="es_nocturna"
                                >

                                <label class="form-check-label" for="es_nocturna">
                                    Es nocturna
                                </label>
                            </div>
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