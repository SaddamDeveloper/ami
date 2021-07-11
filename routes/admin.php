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

        // Homepage
        Route::group(['namespace' => 'Home'], function () {
            Route::get('home', 'HomeController@index')->name('admin.web');
            Route::post('store', 'HomeController@store')->name('admin.store_home');

            // Slider
            Route::group(['namespace' => 'Slider'], function () {
                Route::resource('slider', 'SliderController');
                Route::get('/list/data', 'SliderController@list')->name('admin.ajax.slider_list');
                Route::get('/status/{id}/{status}', 'SliderController@status')->name('slider.status');
            });
        });

        // Pages
        Route::group(['namespace' => 'Page'], function () {
            Route::get('page', 'PagesController@index')->name('admin.page');
        });

        // Course
        Route::group(['namespace' => 'Course', 'prefix' =>'course'], function () {
            Route::get('create', 'CourseController@create')->name('course.create');
            Route::post('store', 'CourseController@store')->name('course.store');
            Route::get('form','CourseController@index')->name('course.index');
            Route::get('/branch/list', 'CourseController@branchList')->name('course.ajax.list');
            Route::get('status/{id}/{status}', 'CourseController@status')->name('course.status');
            Route::get('edit/{id}', 'CourseController@editCourse')->name('course.edit');
            Route::get('delete/{id}', 'CourseController@destroyCourse')->name('course.destroy');
            Route::post('update', 'CourseController@updateCourse')->name('course.update');
        });
    });
});