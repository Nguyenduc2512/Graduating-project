<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $categories = [];
        $faker = Faker\Factory::create();
        for ($i=0; $i < 10; $i++) { 
        	$item = [
        		'name' => $faker->name,
        	];
        	$categories[] = $item;
        }
        DB::table('categories')->insert($categories);
    }
}
