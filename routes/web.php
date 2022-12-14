<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['namespace' => 'Main'], function () {
    Route::get('/', 'IndexController')->name('main');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/dashboard', 'DashboardController')->name('admin.dashboard');

    Route::group(['prefix' => 'blog'], function () {
        Route::resource('/categories', 'Blog\Category\CategoryController');
    });


});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
