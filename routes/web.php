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
Route::get('/configurator', 'ConfiguratorController@index');
Route::get('/configurator/submit', 'ConfiguratorController@submit');
Route::post('/configurator/submit', 'ConfiguratorController@submit');
//Route::post('/configurator/submit', 'ConfiguratorController@submit')->name('configurator-form');

