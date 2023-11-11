<?php

namespace App\Providers;

use App\Models\Blog\Category;
use App\Models\Shop\ShopCategory;
use App\Models\Shop\ShopProduct;
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
            $shop_products = ShopProduct::paginate(3);
            $view->with(['shop_categories' => $shop_categories, 'shop_products' => $shop_products]);
        });
    }
}
