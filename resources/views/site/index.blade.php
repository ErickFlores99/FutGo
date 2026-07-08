@extends('site.templates.layout.app')

@section('content')
    <h1 class="display-5 fw-bold">FutGo</h1>
    <p class="lead text-muted">Bienvenido al Panel de FutGo!</p>

    <!-- Tarjeta Verde con Letras Blancas -->
    <div class="card text-bg-success mb-3" style="max-width: 18rem;">
        <div class="card-header">Estadísticas</div>
        <div class="card-body">
            <h5 class="card-title">Panel de Control Activo</h5>
            <p class="card-text">Aquí verás toda la información detallada de tus torneos y partidos en tiempo real.</p>
        </div>
    </div>

    <!-- Tarjeta para los UI-Elements -->
    <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
        <div class="card-header">UI Elements</div>
        <div class="card-body">
            <h5 class="card-title">Explora los Componentes</h5>
            <a href="{{ route('site.select') }}" class="btn btn-primary">Ver Select</a>
        </div>
    </div>
@endsection