<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

// Vista pública de inicio
Route::get('/', function () {
    return view('site.index');
})->name('site.index');

Route::get('/select', function () {
    return view('site.ui-elements.select');
})->name('site.select');

Route::get('/sweetalert', function () {
    return view('site.ui-elements/sweetalert');
})->name('site.sweetalert');


// Rutas para usuarios no autenticados (Invitados)
Route::middleware('guest')->group(function () {
    // Muestra el formulario de login
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    
    // Procesa el envío del formulario
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
});

// Ruta para cerrar sesión (Solo usuarios autenticados)
Route::post('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');


// Rutas protegidas de la aplicación usando prefijo y tu nuevo middleware
Route::group(["prefix" => "/app", 'middleware' => ['auth', 'revalidate']], function () {
    
    // Al estar dentro del prefijo '/app', esta ruta es realmente '/app'
    Route::get('/', function () {
        return view('admin.index');
    })->name('appIndex'); 
    
    // Ejemplo: Si mañana creas una ruta aquí adentro:
    // Route::get('/profile') -> Su URL real será automáticamente '/app/profile'

});