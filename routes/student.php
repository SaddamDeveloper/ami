<?php
use Illuminate\Support\Facades\Route;
    
/***
 * Student Login Control
 */
Route::group(['namespace' => 'Student', 'prefix' => 'student'], function () {
    Route::get('login','LoginController@index')->name('student.login');    
    Route::post('login', 'LoginController@studentLogin');
});