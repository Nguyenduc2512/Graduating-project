<?php

use Illuminate\Database\Seeder;

class CartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carts = [];
        $faker = Faker\Factory::create();
        for ($i=0; $i < 10; $i++) { 
        	$item = [
        		'user_id' => rand(1, 10),
        		'product_id' => rand(1, 10),
        		'admin_id' => rand(1, 10),
        		'price' => rand(1, 100000000),
        		'amount' => rand(10, 20),
        		'status' => rand(0, 1)
        	];
        	$carts[] = $item;
        }
        DB::table('carts')->insert($carts);
    }
}
