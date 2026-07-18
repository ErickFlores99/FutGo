<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CompetenciaController;

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

Route::get('/datatables', function () {
    return view('site.ui-elements.datatables');
})->name('site.datatables');


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
    
    Route::get('/', [AdminController::class, 'index'])
        ->name('appIndex');
    
    // GRUPO DE RUTAS: COMPETENCIAS
    Route::prefix('competencias')->group(function () {

        Route::get('/mostrar', [CompetenciaController::class, 'mostrar'])
            ->name('competencias.mostrar');

        Route::post('/crear', [CompetenciaController::class, 'crear'])
            ->name('competencias.crear');

    });

});