<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site.index');
})->name('site.index');

Route::get('/login', function () { return view('auth.login'); })->name('login');

Route::get('/app', function () { return view('admin.index'); })->name('appIndex');