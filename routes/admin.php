<?php
use Illuminate\Support\Facades\Route;

/***
 * Admin Login Control
 */
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('login','LoginController@index')->name('admin.login');    
    Route::post('login', 'LoginController@adminLogin');

    Route::group(['middleware'=>'auth:admin'],function(){
        Route::get('/dashboard', 'DashboardController@dashboardView')->name('admin.deshboard'); 
        Route::post('logout', 'LoginController@logout')->name('admin.logout');
        Route::get('/change/password/form', 'LoginController@changePasswordForm')->name('admin.change_password_form');
        Route::post('/change/password', 'LoginController@changePassword')->name('admin.change_password');
    });
});