<?php
use Illuminate\Support\Facades\Route;

/***
 * Admin Login Control
 */
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('login', 'AdminLoginController@showAdminLoginForm')->name('admin.login');
    Route::post('login', 'AdminLoginController@adminLogin');
    Route::post('logout', 'AdminLoginController@logout')->name('admin.logout');
});