<?php

namespace App\Providers;

use App\Models\Blog\Category;
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
//        View::composer('admin.blog.categories.form.form', function ($view) use ($id) {
//            $category = Category::findOrFail($id);
//            $view->with('category', $category);
//        });
    }
}
