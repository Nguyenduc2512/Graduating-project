<?php

use Illuminate\Database\Seeder;

class SizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sizes = [];
        $faker = Faker\Factory::create();
        for ($i=0; $i < 10; $i++) { 
        	$item = [
        		'size' => rand(38, 42),
        		'product_id' => rand(1, 10),
        		'amount' => rand(1, 10),
        	];
        	$sizes[] = $item;
        }
        DB::table('sizes')->insert($sizes);
    }
}
