<?php

use Illuminate\Database\Seeder;

class CartShippingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cart_shipping = [];
        $faker = Faker\Factory::create();
        for ($i=0; $i < 10; $i++) { 
        	$item = [
        		'cart_id' => rand(1, 10)
        	];
        	$cart_shipping[] = $item;
        }
        DB::table('cart_shipping')->insert($cart_shipping);
    }
}
