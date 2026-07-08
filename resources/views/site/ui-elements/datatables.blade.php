@extends('site.templates.layout.app')

@section('css')
    <style>
        table.dataTable{
            font-size: .85rem;
        }

        table.dataTable thead th{
            font-size: .82rem;
            font-weight: 600;
        }

        table.dataTable tbody td{
            font-size: .85rem;
        }

        .dataTables_wrapper{
            font-size: .85rem;
        }

        .dataTables_wrapper .form-control,
        .dataTables_wrapper .form-select{
            font-size: .85rem;
        }

        .dataTables_wrapper .dataTables_info,
        .dataTables_wrapper .dataTables_paginate,
        .dataTables_wrapper .dataTables_length,
        .dataTables_wrapper .dataTables_filter{
            font-size: .85rem;
        }
    </style>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#tblBasic').DataTable(TablaConfig);
        });
    </script>
@endsection

@section('content')

<div class="container-fluid">

    <div class="mb-4">
        <h1 class="display-5 fw-bold">DataTables</h1>
        <p class="lead text-muted">
            UI Elements → DataTables
        </p>
    </div>

    <div class="row g-4">
        <div class="col-12">
            <div class="card shadow-sm">

                <div class="card-header">
                    DataTable Básica Responsive
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <div class="table-responsive">
                            <table id="tblBasic" class="table table-striped table-hover align-middle w-100 table-sm-custom">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Equipo</th>
                                        <th>Ciudad</th>
                                        <th>Categoría</th>
                                        <th>Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @for($i=1;$i<=15;$i++)
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>Equipo {{ $i }}</td>
                                        <td>Ciudad {{ $i }}</td>
                                        <td>Libre</td>
                                        <td>
                                            <span class="badge bg-success">
                                                Activo
                                            </span>
                                        </td>
                                    </tr>
                                    @endfor
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

@endsection