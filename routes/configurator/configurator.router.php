<?php

Route::group(['prefix' => '/configurator'], function () {
    Route::get('/', 'ConfiguratorController@index')->name('configurator.index');
    Route::get('/test', 'ConfiguratorController@tests')->name('configurator.tests');
});
