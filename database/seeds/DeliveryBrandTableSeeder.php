<?php

use Illuminate\Database\Seeder;

class DeliveryBrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $delivery_brand = [];
        $faker = Faker\Factory::create();
        for ($i=0; $i < 10; $i++) { 
        	$item = [
        		'name' => $faker->name,
        	];
        	$delivery_brand[] = $item;
        }
        DB::table('delivery_brand')->insert($delivery_brand);
    }
}
