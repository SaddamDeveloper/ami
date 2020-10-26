<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Web'], function () {
    Route::get('/', 'FrontendController@index')->name('web.index');
});