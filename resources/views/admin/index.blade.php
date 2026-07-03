@extends('admin.template.layouts.app')

@section('content')
    <h1 class="display-5 fw-bold">FutGo</h1>
    <p class="lead text-muted">Bienvenido al Panel Administrativo de FutGo!</p>

    <!-- Tarjeta Verde -->
    <div class="card text-bg-success mb-3" style="max-width: 18rem;">
        <div class="card-header">Estadísticas</div>
        <div class="card-body">
            <h5 class="card-title">Panel de Control Activo</h5>
            <p class="card-text">Aquí verás toda la información detallada de tus torneos y partidos en tiempo real.</p>
        </div>
    </div>
@endsection 