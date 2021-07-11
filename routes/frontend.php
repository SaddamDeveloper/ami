<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Web'], function () {
    Route::get('/', 'FrontendController@index')->name('web.index');
    // Route::get('/{page}', 'FrontendController@show');
    Route::get('/about', 'FrontendController@about')->name('web.about');
    Route::get('/verify', 'FrontendController@verify')->name('web.verify');
    Route::get('/admission', 'FrontendController@admission')->name('web.admission');
    
    // Student
    Route::group(['prefix' => 'admission', 'namespace' => 'Admission'], function () {
        Route::get('/add/student', 'StudentController@index')->name('branch.add.student');
        Route::post('/store/student', 'StudentController@store')->name('branch.store.student');
        Route::get('/show/student', 'StudentController@show')->name('branch.show.student');
        Route::get('/list/student', 'StudentController@list')->name('branch.list.student');
        Route::get('/view/student/{id}', 'StudentController@view')->name('branch.student.view');
        Route::get('/edit/student/{id}', 'StudentController@edit')->name('branch.student.edit');
        Route::put('/update/student/{id}', 'StudentController@update')->name('branch.student.update');
        Route::get('/delete/student/{id}', 'StudentController@destroy')->name('branch.student.delete');
        Route::get('/status/student/{id}/{status}', 'StudentController@status')->name('branch.student.status');
    });
});