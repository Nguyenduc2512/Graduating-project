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
        $UserIDs  = DB::table('users')->pluck('id');
        $PropertiesIDs  = DB::table('properties')->pluck('id');
        $faker = Faker\Factory::create();
        for ($i=0; $i < 10; $i++) {
        	$item = [
                'user_id'      => $faker->randomElement($UserIDs),
        		'properties_id' =>  $faker->randomElement($PropertiesIDs),
        		'admin_id' => null,
        		'amount' => rand(1,5),
                'promo' => null,
        		'status' => rand(0,3)
        	];
        	$carts[] = $item;
        }
        DB::table('carts')->insert($carts);
    }
}
