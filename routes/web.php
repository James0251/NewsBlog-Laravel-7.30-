<?php

use App\Http\Controllers\Main\Blog\IndexController;
use App\Http\Controllers\Shop\ShopCategoryController;
use App\Http\Controllers\Shop\ShopIndexController;
use App\Http\Controllers\Shop\ShopProductController;
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

//Роут для отображения главной страницы localhost:8000
Route::namespace('Main')->group(function () {
    Route::get('/', 'ContentController')->name('main');

    //отображает главную страницу МАГАЗИНА
    Route::prefix('shop')->group(function () {
        Route::get('/', [ShopIndexController::class, 'index'])->name('shop.index');
        Route::get('categories', [ShopCategoryController::class, 'index']);
        Route::get('products', [ShopProductController::class, 'index']);
    });

    //отображает главную страницу БЛОГА
    Route::prefix('blog')->group(function () {
        Route::get('/', [IndexController::class, 'index'])->name('blog.index');
    });
});

//Route::resource('shop/categories', 'Shop\ShopCategoryController');

// Роуты для админки
Route::namespace('Admin')->prefix('admin')->group(function () {
    // главная страница admin/dashboard
    Route::get('/dashboard', 'DashboardController')->name('admin.dashboard');

    // admin/blog - пока ничего нет, кроме категорий
    Route::prefix('blog')->group(function () {
        // admin/blog/categories
        Route::resource('categories', 'Blog\Category\CategoryController');
    });
});

Auth::routes();

// страница авторизованного в личный кабинет
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');



