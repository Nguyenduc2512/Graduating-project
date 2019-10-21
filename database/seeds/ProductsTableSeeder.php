<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [];
        $faker = Faker\Factory::create();
        for ($i=0; $i < 10; $i++) { 
        	$item = [
        		'name' => $faker->name,
        		'category_id' => rand(1, 10),
        		'brand_id' => rand(1, 10),
        		'picture' => 'images/'. $faker->image($dir = 'public/images', $width = 640, $height = 480, 'cats', false),
        		'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        		'price' => rand(0, 1),        		
        	];
        	$products[] = $item;
        }
        DB::table('products')->insert($products);
    }
}
