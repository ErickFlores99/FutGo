# ⚽ FutGo

**FutGo** es un sistema integral de gestión deportiva diseñado para informar, organizar y administrar una o varias competencias de fútbol, orientadas y segmentadas por diferentes categorías. 

El objetivo principal es centralizar la logística de los torneos, desde la inscripción de equipos hasta la generación de roles de juego y tablas de posiciones, ofreciendo tanto un panel administrativo privado como una vista pública para los aficionados y jugadores.

---

## 🚀 Características Principales

* **Multicompetencia y Categorías:** Gestión de múltiples torneos simultáneos divididos por categorías (ej. Libre, Veteranos, Femenil).
* **Administración de Equipos:** Registro y control de los equipos participantes (`equipos`).
* **Logística Deportiva:** Generación automática o manual del rol de juegos y actualización en tiempo real de la tabla de posiciones.
* **Separación de Entornos:** 
  * **Portal Público (Site):** Donde los jugadores y aficionados pueden ver los resultados y estadísticas.
  * **Panel de Control (Admin):** Área segura para la gestión de la liga.

---

## 🛠 Tecnologías Utilizadas

* **Backend:** PHP 8.3.30 | Laravel (Framework)
* **Frontend Público & Admin:** HTML5, CSS3, JavaScript (jQuery), Bootstrap 5 (Plantilla Sneat)
* **Herramientas Extra:** SweetAlert2 (Notificaciones), Maatwebsite/Excel (Importación/Exportación de datos)

---

## 📁 Arquitectura y Estructura del Proyecto

Para mantener el código limpio, escalable y siguiendo el Principio de Responsabilidad Única, el proyecto divide su lógica (`Controllers`, `Requests`, `Services`, `Views` y `Routes`) en tres contextos principales:

* `Admin`: Toda la lógica del panel de control privado.
* `Site`: El portal público e informativo.
* `Auth`: Gestión de inicio de sesión y autenticación.

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
|
resources/
└── views/
    ├── admin/
    ├── auth/
    ├── shared/
    └── site/
|
routes/
├── admin.php
├── site.php
└── web.php
|
public/
└── assets/
    ├── admin/
    └── site/

---

## ⚙️ Instalación y Configuración
* **Sigue estos pasos para levantar el entorno de desarrollo local:

* **Clonar el repositorio:
    git clone [https://github.com/tu-usuario/futgo.git]
    cd futgo

* **Instalar dependencias de PHP:
    composer install

* **Configurar el entorno:
    Copia el archivo de ejemplo y configura tus credenciales de base de datos.

    cp .env.example .env

* **Generar la clave de la aplicación:
    php artisan key:generate

* **Ejecutar migraciones y seeders:
    php artisan migrate --seed
