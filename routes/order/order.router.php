<?php

Route::group(['prefix' => '/order'], function () {
    Route::post('/create', 'OrderController@create')->name('order.create');
});
