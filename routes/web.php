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

Route::group(['prefix' => '/configurator'], function () {
    Route::get('/', 'ConfiguratorController@index')->name('configurator.index');
//    Route::post('/submit', 'ConfiguratorController@submit')->name('configurator.submit');
    Route::post('/makeOrder', 'OrderController@makeOrder')->name('configurator.makeOrder');
});
