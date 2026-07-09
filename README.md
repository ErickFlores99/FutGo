# ⚽ FutGo

**FutGo** es un sistema integral de gestión deportiva diseñado para informar, organizar y administrar una o varias competencias de fútbol, orientadas y segmentadas por diferentes categorías.

El objetivo principal es centralizar la logística de los torneos, desde la inscripción de equipos hasta la generación de calendarios, captura de resultados, estadísticas y tablas de posiciones, ofreciendo tanto un panel administrativo privado como una vista pública para jugadores y aficionados.

---

# 🚀 Características Principales

* **Multicompetencia y Categorías**

  * Gestión de múltiples torneos.
  * Competencias por categoría y rama.

* **Administración de Equipos**

  * Equipos.
  * Jugadores.
  * Árbitros.
  * Sedes.

* **Logística Deportiva**

  * Jornadas.
  * Partidos.
  * Roles de juego.
  * Resultados.
  * Estadísticas.

* **Portal Público**

  * Calendario.
  * Resultados.
  * Tabla General.
  * Goleadores.
  * Estadísticas.

* **Panel Administrativo**

  * Administración completa de la competencia.
  * Catálogos.
  * Configuración.
  * Seguridad.

---

# 🛠 Tecnologías Utilizadas

## Backend

* PHP 8.3+
* Laravel 12

## Frontend

* HTML5
* CSS3
* JavaScript (ES6)
* jQuery
* Bootstrap 5

---

# 📦 Librerías JavaScript

El proyecto utiliza librerías independientes para mantener una interfaz moderna, reutilizable y fácil de mantener.

| Librería      | Uso                                      |
| ------------- | ---------------------------------------- |
| jQuery        | Manipulación del DOM y AJAX              |
| Bootstrap 5   | Framework CSS y componentes              |
| DataTables    | Tablas dinámicas                         |
| Select2       | Selects avanzados                        |
| SweetAlert2   | Alertas y confirmaciones                 |
| Laravel Excel | Importación y exportación de información |

---

# 🎨 Organización de Assets

Las librerías se encuentran organizadas dentro de **public/assets**.

```text
public/

└── assets/

    ├── css/

    │   ├── styles.css

    │   ├── datatable.theme.css

    │   └── select2.theme.css

    │

    ├── js/

    │   ├── app.js

    │   ├── datatable.config.js

    │   └── select2.config.js

    │

    └── libs/

        ├── bootstrap/

        ├── jquery/

        ├── datatables/

        ├── select2/

        ├── sweetalert2/

        └── excel/
```

---

# 🎯 Temas personalizados

Con el objetivo de mantener una apariencia uniforme en toda la aplicación, cada componente posee su propio archivo de estilos.

## DataTables

```text
assets/css/datatable.theme.css
```

Personaliza:

* Encabezados
* Paginación
* Buscador
* Selector de registros
* Hover
* Tipografía
* Responsive

Configuración global:

```text
assets/js/datatable.config.js
```

Incluye:

* Idioma español
* Responsive
* Scroll
* Cantidad de registros
* Configuración reutilizable

---

## Select2

```text
assets/css/select2.theme.css
```

Personaliza:

* Bordes
* Placeholder
* Dropdown
* Chips
* Focus
* Hover
* Tema Bootstrap 5

Configuración global:

```text
assets/js/select2.config.js
```

Características:

* Inicialización automática.
* Placeholder configurable.
* allowClear.
* Soporte para múltiples selecciones.
* Tags.
* Configuración mediante atributos `data-*`.
* Preparado para integración con AJAX.

Ejemplo:

```html
<select
    class="select2"
    data-placeholder="Seleccione un equipo"
    data-allow-clear="true">

</select>
```

---

## SweetAlert2

Utilizado para todas las notificaciones del sistema.

Tipos de alertas implementadas:

* Success
* Error
* Warning
* Info
* Question
* Confirmación
* Toast
* Loading

---

# 📁 Arquitectura del Proyecto

Para mantener el código limpio, escalable y siguiendo el principio de responsabilidad única, el proyecto divide su lógica en tres contextos.

```text
app/

├── Http/

│   ├── Controllers/
│   │   ├── Admin/
│   │   ├── Auth/
│   │   └── Site/

│   └── Requests/
│       ├── Admin/
│       ├── Auth/
│       └── Site/

├── Services/
│   ├── Admin/
│   ├── Auth/
│   └── Site/

resources/
└── views/
    ├── admin/
    ├── auth/
    └── site/

routes/
└── web.php
```

---

# ⚙️ Instalación

Clonar el repositorio.

```bash
git clone https://github.com/tu-usuario/futgo.git

cd futgo
```

Instalar dependencias.

```bash
composer install
```

Configurar el entorno.

```bash
cp .env.example .env
```

Generar la clave.

```bash
php artisan key:generate
```

Ejecutar migraciones.

```bash
php artisan migrate --seed
```

Levantar el servidor.

```bash
php artisan serve
```

---

# 📚 UI Kit

El proyecto incluye una colección de componentes reutilizables para mantener una interfaz consistente.

Actualmente dispone de ejemplos para:

* Bootstrap 5
* Select2
* DataTables
* SweetAlert2

Cada componente cuenta con:

* Configuración global.
* Tema personalizado.
* Ejemplos funcionales.
* Código reutilizable.
* Compatibilidad con Bootstrap 5.

---

# 📌 Objetivo del Proyecto

FutGo busca convertirse en una plataforma modular para la administración de competencias deportivas, permitiendo gestionar múltiples ligas y torneos desde un único sistema, utilizando componentes reutilizables y una arquitectura escalable basada en Laravel.
