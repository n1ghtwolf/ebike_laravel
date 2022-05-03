<?php

Route::group(['prefix' => '/configurator'], function () {
    Route::get('/', 'ConfiguratorController@index')->name('configurator.index');
});
