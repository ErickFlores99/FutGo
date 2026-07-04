@extends('admin.template.layouts.app')

@section('content')
    <div class="m-3 mt-2 mb-2 ">
        <h2 class="fw-bold">FutGo</h2>
        <p class="lead text-muted">Bienvenido al Panel Administrativo de FutGo!</p>
    </div>

    <main class="p-4 m-3 mt-3 bg-white rounded-4 shadow-sm flex-grow-1">
        <!-- Tarjeta Verde -->
        <div class="card text-bg-success mb-3" style="max-width: 18rem;">
            <div class="card-header">Estadísticas</div>
            <div class="card-body">
                <h5 class="card-title">Panel de Control Activo</h5>
                <p class="card-text">Aquí verás toda la información detallada de tus torneos y partidos en tiempo real.</p>
            </div>
        </div>
    </main>
    
@endsection 