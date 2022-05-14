<?php

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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'inDevController@index')->name('about');
Route::get('/contacts', 'inDevController@index')->name('contacts');
Route::get('/delivery', 'inDevController@index')->name('delivery');
Route::get('/faq', 'inDevController@index')->name('faq');
Route::get('/delivery', 'inDevController@index')->name('blog');

include_once "configurator/configurator.router.php";
include_once "order/order.router.php";
