<?php

Route::group(['prefix' => '/order'], function () {
    Route::get('/confirm', 'OrderController@index')->name('order.confirm');
    Route::post('/create', 'OrderController@create')->name('order.create');
});
