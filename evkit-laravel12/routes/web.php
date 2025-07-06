<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home-content');
})->name('home');

// Configurator
Route::controller(App\Http\Controllers\ConfiguratorController::class)
    ->prefix('configurator')
    ->group(function () {
        Route::get('/', 'index')->name('configurator.index');
    });

// Orders
Route::controller(App\Http\Controllers\OrderController::class)
    ->prefix('order')
    ->group(function () {
        Route::get('/confirm', 'index')->name('order.confirm');
        Route::post('/create', 'create')->name('order.create');
    });
