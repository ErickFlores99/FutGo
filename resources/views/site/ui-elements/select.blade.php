@extends('site.templates.layout.app')

@section('js')
    <script>
       $(function () {
            $('.select2').select2({

                theme: 'bootstrap-5',

                width: '100%',

                language: 'es',

                placeholder: 'Seleccione una opción',

                allowClear: true

            });

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
                    <option>Liverpool</option>
                    <option>Juventus</option>
                    <option>PSG</option>

                </select>
            </div>
        </div>
    </div>

     <div class="col-lg-6">
        <div class="card shadow-sm h-100">
            <div class="card-header">
                Select con Búsqueda
            </div>

            <div class="card-body">
                <select class="form-select select2">
                    <option></option>

                    <option>Barcelona</option>
                    <option>Real Madrid</option>
                    <option>Liverpool</option>
                    <option>Juventus</option>
                    <option>PSG</option>
                    <option>Manchester City</option>
                    <option>Inter</option>
                    <option>Milan</option>
                    <option>Bayern Munich</option>
                </select>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card shadow-sm h-100">
            <div class="card-header">
                Selección Múltiple
            </div>
            <div class="card-body">
                <select class="form-select select2" multiple>
                    <option></option>

                    <option>Barcelona</option>
                    <option>Real Madrid</option>
                    <option>Liverpool</option>
                    <option>Juventus</option>
                    <option>PSG</option>

                </select>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card shadow-sm h-100">
            <div class="card-header">
                Múltiple con Búsqueda
            </div>
            <div class="card-body">
                <select class="form-select select2" multiple>
                    <option></option>
                    @for($i=1;$i<=25;$i++)
                        <option>Jugador {{ $i }}</option>
                    @endfor
                </select>
            </div>
        </div>
    </div>
        

</div>

@endsection