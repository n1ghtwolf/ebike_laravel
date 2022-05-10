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

Route::get('/', 'HomeController@index');
Route::get('/about', 'inDevController@index');
Route::get('/contacts', 'inDevController@index');
Route::get('/delivery', 'inDevController@index');

include_once "configurator/configurator.router.php";
include_once "order/order.router.php";
