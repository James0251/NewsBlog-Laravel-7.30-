<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        \App\Models\Shop\ShopCategory::factory(6)->create();
        \App\Models\Shop\ShopProduct::factory(20)->create();
    }
}
