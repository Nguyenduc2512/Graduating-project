<?php

use Illuminate\Database\Seeder;

class CartItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cart_item = [];
        $faker = Faker\Factory::create();
        for ($i=0; $i < 10; $i++) { 
        	$item = [
        		'cart_id' => rand(1, 10),
        		'item_id' => rand(1, 10)
        	];
        	$cart_item[] = $item;
        }
        DB::table('cart_item')->insert($cart_item);
    }
}
