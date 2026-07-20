### Estructura del Proyecto
app
│
├── Http
│   ├── Controllers
│   │   └── Admin
│   │       └── CompetenciaController.php
│   │
│   └── Requests
│       └── Admin
│           └── Competencia
│               └── CrearCompetenciaRequest.php
│
├── Models
│   │
│   ├── User
│   │   └── User.php
│   │
│   └── Competencia
│       ├── Competencia.php
│       ├── Categoria.php
│       ├── Division.php
│       ├── TipoCompetencia.php
│       └── CategoriaCompetencia.php
│
├── Services
│   ├── Admin
│   │   └── Competencia
│   │       └── CompetenciaService.php
│
└── Providers