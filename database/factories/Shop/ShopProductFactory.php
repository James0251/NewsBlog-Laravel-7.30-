<?php

namespace Database\Factories\Shop;

use App\Models\Shop\ShopProduct;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ShopProductFactory extends Factory
{
    protected $model = ShopProduct::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $category_id = $this->faker->numberBetween(1, 5);
        $article = $this->faker->numberBetween(10, 1000);
        $shop_product_name = $this->faker->unique()->words($nb=4,$asText=true);
        $slug = Str::slug($shop_product_name);
        $short_description = $this->faker->realText(rand(50, 200));
        $description = $this->faker->text(500);
        $regular_price = $this->faker->numberBetween(10, 500);
        $sku = 'SKU_'.$this->faker->unique()->numberBetween(100, 500);
        $stock_status = 'instock';
        $quantity = $this->faker->numberBetween(100, 200);

        return [
            'category_id' => $category_id,
            'article' => $article,
            'name' => $shop_product_name,
            'slug' => $slug,
            'short_description' => $short_description,
            'description' => $description,
            'regular_price' => $regular_price,
            'sku' => $sku,
            'stock_status' => $stock_status,
            'quantity' => $quantity
        ];
    }
}
