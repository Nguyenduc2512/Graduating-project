<?php

use Illuminate\Database\Seeder;

class SlideShowTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slideshows = [];
        $faker = Faker\Factory::create();
        for ($i=0; $i < 3; $i++) { 
        	$item = [
        		'picture' => 'images/'. $faker->image($dir = 'public/images', $width = 640, $height = 480, 'cats', false),
        		'url' => $faker->url,
        	];
        	$slideshows[] = $item;
        }
        DB::table('slideshows')->insert($slideshows);
    }
}
