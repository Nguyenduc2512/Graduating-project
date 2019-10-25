<?php

use Illuminate\Database\Seeder;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [];
        $faker = Faker\Factory::create();
        for ($i=0; $i < 10; $i++) { 
        	$item = [
        		'size' => rand(38, 43),
        		'product_id' => rand(1, 10),
        		'amount' => rand(1, 10),
        	];
        	$items[] = $item;
        }
        DB::table('items')->insert($items);
    }
}
