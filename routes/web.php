<?php

use Illuminate\Support\Facades\Auth;
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
    // главная страница авторизованных пользователей
    Route::get('/', 'IndexController')->name('main');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    // admin/dashboard
    Route::get('/dashboard', 'DashboardController')->name('admin.dashboard');

    // admin/blog - пока ничего нет, кроме категорий
    Route::group(['prefix' => 'blog'], function () {
        // admin/blog/categories
        Route::resource('/categories', 'Blog\Category\CategoryController');
    });


});

Auth::routes();

// страница авторизованного в личный кабинет
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/blog', [\App\Http\Controllers\Main\Blog\IndexController::class, 'index'])->name('blog.index');
