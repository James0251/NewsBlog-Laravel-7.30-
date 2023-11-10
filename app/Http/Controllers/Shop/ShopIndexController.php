<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Blog\Category;
use App\Models\Shop\ShopCategory;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ShopIndexController extends Controller
{
    public function index()
    {
        $shop_categories = ShopCategory::all();
        return view('shop.index', compact('shop_categories'));
    }
}
