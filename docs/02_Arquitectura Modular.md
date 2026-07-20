### Arquitectura Modular

El proyecto utiliza una modularización por dominios, agrupando las entidades relacionadas dentro de un mismo contexto funcional.

Por ejemplo, el dominio Competencia contiene todos los modelos relacionados con la gestión de competencias.

Competencia
│
├── Competencia
├── Categoria
├── Division
├── TipoCompetencia
└── CategoriaCompetencia

Esta organización permite mantener el proyecto ordenado conforme aumenta su tamaño.