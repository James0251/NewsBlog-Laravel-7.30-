<?php

namespace Database\Factories\Shop;

use App\Models\Shop\ShopCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ShopCategoryFactory extends Factory
{
    protected $model = ShopCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $shop_category_name = $this->faker->unique()->words($nb=2,$asText=true);
        $slug = Str::slug($shop_category_name);
        $content = $this->faker->realText(rand(100, 200));
        return [
            'name' => $shop_category_name,
            'slug' => $slug,
            'content' => $content
        ];
    }
}
