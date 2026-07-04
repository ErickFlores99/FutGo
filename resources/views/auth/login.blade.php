<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FutGo - Iniciar Sesión</title>
    <!-- CSS de Bootstrap -->
    <link href="{{ asset('assets/site/bootstrap-5.3/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Contenedor Flexbox que ocupa el 100% de la altura de la pantalla y centra el contenido -->
    <div class="d-flex align-items-center justify-content-center min-vh-100 px-3">
        
        <!-- Tarjeta del Formulario (con ancho máximo controlado para que sea responsivo) -->
        <div class="card shadow border-0 p-4 w-100" style="max-width: 400px;">
            <div class="card-body position-relative"> <!-- Añadimos position-relative para poder alinear la flecha -->
                    
                    <!-- Botón de retorno a la página de inicio -->
                    <div class="position-absolute top-0 start-0 m-3">
                        <a href="{{ route('site.index') }}" class="text-secondary text-decoration-none small d-flex align-items-center gap-1 link-success" title="Volver al inicio">
                            <!-- Icono SVG de flecha -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
                            </svg>
                            <span class="d-none d-sm-inline">Volver</span>
                        </a>
                    </div>
                    
                    <!-- Logo / Título con mayor separación (mt-5) -->
                    <div class="text-center mb-4 mt-5">
                    <h2 class="fw-bold text-success display-6">FutGo</h2>
                    <p class="text-muted small">Ingresa tus credenciales para acceder al panel</p>
                </div>

                <form action="{{ route('login.store') }}" method="POST">
                    @csrf
                    
                    <!-- Campo de Correo Electrónico -->
                    <div class="mb-3">
                        <label for="email" class="form-label text-secondary small fw-semibold">Correo Electrónico</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="nombre@ejemplo.com" required>
                        
                        <!-- Muestra el error específico del correo si existe -->
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Campo de Contraseña -->
                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <label for="password" class="form-label text-secondary small fw-semibold mb-0">Contraseña</label>
                            <a href="#" class="text-success small text-decoration-none">¿La olvidaste?</a>
                        </div>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="••••••••" required>
                        
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Recordarme (Checkbox) -->
                    <div class="form-check mb-4 text-start">
                        <!-- Importante: name="remember" -->
                        <input class="form-check-input" type="checkbox" name="remember" id="remember">
                        <label class="form-check-label text-muted small" for="remember">
                            Recordarme en este dispositivo
                        </label>
                    </div>

                    <!-- Botón de Acción Principal -->
                    <button type="submit" class="btn btn-success btn-lg w-100 fw-bold mb-3">
                        Iniciar Sesión
                    </button>

                    <!-- Enlace de Registro -->
                    <div class="text-center">
                        <span class="text-muted small">¿No tienes cuenta? </span>
                        <a href="#" class="text-success small fw-bold text-decoration-none">Contáctanos</a>
                    </div>
                </form>

            </div>
        </div>

    </div>

    <!-- JS de Bootstrap -->
    <script src="{{ asset('assets/site/bootstrap-5.3/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>