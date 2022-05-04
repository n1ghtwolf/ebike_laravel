<?php

Route::group(['prefix' => '/order'], function () {
    Route::get('/show', 'OrderController@index')->name('order.show');
    Route::post('/create', 'OrderController@create')->name('order.create');
});
