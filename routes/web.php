<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\inDevController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [inDevController::class, 'index'])->name('about');
Route::get('/contacts', [inDevController::class, 'index'])->name('contacts');
Route::get('/delivery', [inDevController::class, 'index'])->name('delivery');
Route::get('/faq', [inDevController::class, 'index'])->name('faq');
Route::get('/blog', [inDevController::class, 'index'])->name('blog');

Route::get('/product/{id}', [ProductController::class, 'show']);
include_once "configurator/configurator.router.php";
include_once "order/order.router.php";
