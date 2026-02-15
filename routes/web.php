<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.auth.login');
})->name('home');

Route::view('/dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

require __DIR__.'/settings.php';

Route::get('/document/create', function () {
    return view('document.create');
})->middleware('auth')->name('accueil');

