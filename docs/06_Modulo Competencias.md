### Módulo Competencias
Actualmente es el módulo principal del sistema.

Permite administrar:

Competencias
Tipos de competencia
Divisiones
Categorías

### Flujo del módulo
Administrador

        │
        ▼

Crear Competencia

        │
        ▼

Validación (Request)

        │
        ▼

CompetenciaService

        │
        ▼

Competencia Model

        │
        ▼

MySQL

### Base de Datos
Actualmente el módulo Competencias está compuesto por las siguientes tablas.

tipo_competencias
        │
        │
        ▼
competencias
        │
        ├─────────────┐
        ▼             ▼
divisiones   competencia_categorias
                    │
                    ▼
              categorias

### Relaciones 

# Competencia
Pertenece a:
    TipoCompetencia
    Division

Tiene muchas:
    Categorias (Muchos a muchos)

# Categoria
Pertenece a muchas competencias.

# Division
    Tiene muchas competencias.

# TipoCompetencia
    Tiene muchas competencias.