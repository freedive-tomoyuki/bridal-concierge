<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'IndexController@index')->name('index');
Route::get('/search', 'IndexController@search')->name('form.search');
Route::post('/create', 'IndexController@create')->name('form.create');
Route::get('/thanks', 'IndexController@thanks')->name('form.thanks');

Auth::routes();

Route::name('admin.')->group(function() {
    Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function() {
        Route::get('/', 'Admin\DashboardController@index')->name('dashboard');
        Route::resource('/shops', 'Admin\ShopController');
        Route::resource('/applications', 'Admin\ApplicationController');
    });
});

