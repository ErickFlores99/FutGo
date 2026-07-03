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
            <div class="card-body">
                
                <!-- Logo / Título -->
                <div class="text-center mb-4">
                    <h2 class="fw-bold text-success display-6">FutGo</h2>
                    <p class="text-muted small">Ingresa tus credenciales para acceder al panel</p>
                </div>

                <!-- Formulario -->
                <form action="#" method="POST">
                    
                    <!-- Campo de Correo Electrónico -->
                    <div class="mb-3">
                        <label for="email" class="form-label text-secondary small fw-semibold">Correo Electrónico</label>
                        <input type="email" class="form-control form-control" id="email" placeholder="nombre@ejemplo.com" required>
                    </div>

                    <!-- Campo de Contraseña -->
                    <div class="mb-3">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <label for="password" class="form-label text-secondary small fw-semibold mb-0">Contraseña</label>
                            <a href="#" class="text-success small text-decoration-none">¿La olvidaste?</a>
                        </div>
                        <input type="password" class="form-control form-control" id="password" placeholder="••••••••" required>
                    </div>

                    <!-- Recordarme (Checkbox) -->
                    <div class="form-check mb-4 text-start">
                        <input class="form-check-input" type="checkbox" id="rememberMe">
                        <label class="form-check-input-label text-muted small" for="rememberMe">
                            Recordarme en este dispositivo
                        </label>
                    </div>

                    <!-- Botón de Acción Principal -->
                    <button type="submit" class="btn btn-success btn-lg w-100 fw-bold mb-3">
                        Iniciar Sesión
                    </button>
                    <a href="{{ route('appIndex') }}" class="btn btn-success btn-lg w-100 fw-bold mb-3">
                        Acceder
                    </a>

                    <!-- Enlace de Registro -->
                    <div class="text-center">
                        <span class="text-muted small">¿No tienes cuenta? </span>
                        <a href="#" class="text-success small fw-bold text-decoration-none">Contactanos</a>
                    </div>

                </form>

            </div>
        </div>

    </div>

    <!-- JS de Bootstrap -->
    <script src="{{ asset('assets/site/bootstrap-5.3/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>