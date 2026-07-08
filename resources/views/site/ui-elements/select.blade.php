@extends('site.templates.layout.app')

@section('js')
    <script>
       $(function () {
        });
    </script>
@endsection

@section('content')

<div class="container-fluid">

    <div class="mb-4">
        <h1 class="display-5 fw-bold">Select</h1>
        <p class="lead text-muted">
            UI Elements → Select2
        </p>
    </div>

    <div class="col-lg-6">
        <div class="card shadow-sm h-100">
            <div class="card-header">
                Select Básico
            </div>
            <div class="card-body">
                <select class="form-select select2">
                    <option></option>
                    <option>Barcelona</option>
                    <option>Real Madrid</option>
                </select>
            </div>
        </div>
    </div>

     <div class="col-lg-6 mt-3">
        <div class="card shadow-sm h-100">
            <div class="card-header">
                Select con Placeholder personalizado
            </div>

            <div class="card-body">
                <select
                    class="form-select select2"
                    data-placeholder="Seleccione un equipo">

                    <option></option>

                    <option>Barcelona</option>
                    <option>PSG</option>

                </select>
            </div>
        </div>
    </div>

    <div class="col-lg-6 mt-3">
        <div class="card shadow-sm h-100">
            <div class="card-header">
                Sin boton de limpiar (allowClear = false)
            </div>
            <div class="card-body">
                <select
                    class="form-select select2"
                    data-allow-clear="false">

                    <option></option>

                    <option>Equipo A</option>

                </select>
            </div>
        </div>
    </div>

    <div class="col-lg-6 mt-3">
        <div class="card shadow-sm h-100">
            <div class="card-header">
                Sin busqueda (search = false)
            </div>
            <div class="card-body">
                <select
                    class="form-select select2"
                    data-search="false">

                    <option></option>

                    <option>Liga Libre</option>
                    <option>Liga Juvenil</option>

                </select>
            </div>
        </div>
    </div>
        
    <div class="col-lg-6 mt-3">
        <div class="card shadow-sm h-100">
            <div class="card-header">
                Seleccion múltiple (multiple = true)
            </div>
            <div class="card-body">
                <select
                    class="form-select select2"
                    multiple
                    data-placeholder="Seleccione jugadores">

                    <option>Jugador 1</option>
                    <option>Jugador 2</option>
                    <option>Jugador 3</option>

                </select>
            </div>
        </div>
    </div>

    <div class="col-lg-6 mt-3">
        <div class="card shadow-sm h-100">
            <div class="card-header">
                Maximo de selecciones (maximumSelectionLength = 2)
            </div>
            <div class="card-body">
                <select
                    class="form-select select2"
                    multiple
                    data-max="3">

                    <option>Barcelona</option>
                    <option>PSG</option>
                    <option>Liverpool</option>
                    <option>Juventus</option>

                </select>
            </div>
        </div>
    </div>

    <div class="col-lg-6 mt-3">
        <div class="card shadow-sm h-100">
            <div class="card-header">
                Tags (tags = true)
            </div>
            <div class="card-body">
                <select
                    class="form-select select2"
                    multiple
                    data-tags="true">

                </select>
            </div>
        </div>
    </div>

    <div class="col-lg-6 mt-3">
        <div class="card shadow-sm h-100">
            <div class="card-header">
                Mantener abierto el select al seleccionar (closeOnSelect = false)
            </div>
            <div class="card-body">
                <select
                    class="form-select select2"
                    multiple
                    data-close="false">

                    <option>Jugador 1</option>
                    <option>Jugador 2</option>

                </select>
            </div>
        </div>
    </div>

    <div class="col-lg-6 mt-3">
        <div class="card shadow-sm h-100">
            <div class="card-header">
                Placeholder + multilpes + limite
            </div>
            <div class="card-body">
                <select
                    class="form-select select2"
                    multiple
                    data-placeholder="Seleccione árbitros"
                    data-max="5">

                    <option>Jugador 1</option>
                    <option>Jugador 2</option>
                    <option>Jugador 3</option>
                    <option>Jugador 4</option>
                    <option>Jugador 5</option>
                    <option>Jugador 6</option>

                </select>
            </div>
        </div>
    </div>

</div>

@endsection