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
        $CateIDs  = DB::table('categories')->pluck('id');
        $BrandIDs  = DB::table('brands')->pluck('id');
        $faker = Faker\Factory::create();
        for ($i=0; $i < 10; $i++) {
        	$item = [
        		'name' => $faker->name,
                'category_id'  => $faker->randomElement($CateIDs),
        		'brand_id' => $faker->randomElement($BrandIDs),
        		'picture' => 'images/'. $faker->image($dir = 'public/images', $width = 640, $height = 480, 'cats', false),
        		'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
                'price' => rand(1, 100000000),
                'status' => rand(1,2),
        	];
        	$products[] = $item;
        }
        DB::table('products')->insert($products);
    }
}
