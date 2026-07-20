Arquitectura General

El sistema sigue una arquitectura por capas, donde cada componente tiene una única responsabilidad.

Usuario
    │
    ▼
Blade
    │
    ▼
JavaScript (AJAX)
    │
    ▼
Routes
    │
    ▼
Controller
    │
    ▼
Request
    │
    ▼
Service
    │
    ▼
Model
    │
    ▼
Base de Datos


### Cada capa tiene una responsabilidad específica:
Capa	        Responsabilidad
Blade	        Interfaz de usuario
JavaScript	    Interacciones dinámicas
Routes	        Definición de rutas
Controller	    Recibir y responder peticiones
Request	        Validaciones
Service	        Lógica del negocio
Model	        Acceso a datos y relaciones
Database	    Persistencia