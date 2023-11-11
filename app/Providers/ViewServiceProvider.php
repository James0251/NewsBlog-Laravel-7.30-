<?php

namespace App\Providers;

use App\Models\Blog\Category;
use App\Models\Shop\ShopCategory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     *
     * @return void
     */
    public function boot()
    {
        View::composer('shop.index', function ($view) {
            $shop_categories = ShopCategory::all();
            $view->with('shop_categories', $shop_categories);
        });
    }
}
