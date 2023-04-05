<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [inDevController::class, 'index'])->name('about');
Route::get('/contacts', [inDevController::class, 'index'])->name('contacts');
Route::get('/delivery', [inDevController::class, 'index'])->name('delivery');
Route::get('/faq', [inDevController::class, 'index'])->name('faq');
Route::get('/blog', [inDevController::class, 'index'])->name('blog');

include_once "configurator/configurator.router.php";
include_once "order/order.router.php";
