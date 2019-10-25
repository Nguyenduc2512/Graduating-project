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
        $faker = Faker\Factory::create();
        for ($i=0; $i < 10; $i++) { 
        	$item = [
        		'cart_shipping_id' => rand(1, 10),
        		'brand_ship_id' => rand(1, 10),
        	];
        	$delivery[] = $item;
        }
        DB::table('delivery')->insert($delivery);
    }
}
