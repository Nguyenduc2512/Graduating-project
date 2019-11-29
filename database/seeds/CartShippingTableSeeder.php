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
        $CartIDs  = DB::table('carts')->pluck('id');
        $faker = Faker\Factory::create();
        for ($i=0; $i < 10; $i++) {
        	$item = [
                'cart_id'      => $faker->randomElement($CartIDs),
        	];
        	$cart_shipping[] = $item;
        }
        DB::table('cart_shipping')->insert($cart_shipping);
    }
}
