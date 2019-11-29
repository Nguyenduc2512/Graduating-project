<?php

use Illuminate\Database\Seeder;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [];
        $faker = Faker\Factory::create();
        for ($i=0; $i < 10; $i++) {
        	$item = [
        		'name' => $faker->name,
        		'logo' => 'images/'. $faker->image($dir = 'public/images', $width = 640, $height = 480, 'cats', false),
                'status' => rand(0,2),
        		'link' => $faker->url,
        	];
        	$brands[] = $item;
        }
        DB::table('brands')->insert($brands);
    }
}
