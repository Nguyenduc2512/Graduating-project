<?php

use Illuminate\Database\Seeder;

class PropertiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $properties = [];
        $ProductIDs  = DB::table('products')->pluck('id');
        $ColorIDs  = DB::table('colors')->pluck('id');
        $faker = Faker\Factory::create();
        for ($i=0; $i < 10; $i++) {
            $item = [
                'product_id'      => $faker->randomElement($ProductIDs),
                'color_id'      => $faker->randomElement($ColorIDs),
                'size' =>rand(36,43),
            ];
            $properties[] = $item;
        }
        DB::table('properties')->insert($properties);
    }
}
