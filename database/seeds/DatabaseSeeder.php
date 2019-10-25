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
        $this->call(UsersTableSeeder::class);
        $this->call(AdminTableSeeder::class);
        $this->call(BrandTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(CartTableSeeder::class);
        $this->call(ItemTableSeeder::class);
        $this->call(DeliveryBrandTableSeeder::class);
        $this->call(CartItemTableSeeder::class);
        $this->call(CartShippingTableSeeder::class);
        $this->call(CommentTableSeeder::class);
        $this->call(DeliveryTableSeeder::class);
        $this->call(ContactTableSeeder::class);
        $this->call(PromoTableSeeder::class);
    }
}
