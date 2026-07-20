### Organización del Código

El proyecto sigue el principio de responsabilidad única.

# Models
Contienen:
    Relaciones
    Fillable
    Scopes
    Accessors
    Mutators

    No contienen lógica de negocio.

# Services
Contienen:
    Procesos complejos
    Transacciones
    Reglas de negocio

    Ejemplo:
    CompetenciaService

# Requests
Contienen únicamente validaciones.

Ejemplo:
    CrearCompetenciaRequest

# Controllers
Su responsabilidad es:
    Recibir solicitudes.
    Invocar el Service.
    Retornar respuestas.

    No contienen lógica de negocio.