<?php

use Illuminate\Database\Seeder;

class DeliveryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $delivery = [];
        $Cart_ShippingIDs  = DB::table('cart_shipping')->pluck('id');
        $Brand_ShipIDs  = DB::table('cart_shipping')->pluck('id');
        $faker = Faker\Factory::create();
        for ($i=0; $i < 10; $i++) {
        	$item = [
        		'cart_shipping_id' =>  $faker->randomElement($Cart_ShippingIDs),
        		'brand_ship_id' => $faker->randomElement($Brand_ShipIDs),
        	];
        	$delivery[] = $item;
        }
        DB::table('delivery')->insert($delivery);
    }
}
