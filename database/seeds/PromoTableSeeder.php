<?php

use Illuminate\Database\Seeder;

class PromoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $promos = [];
        $faker = Faker\Factory::create();
        for ($i=0; $i < 10; $i++) { 
        	$item = [
        		'code' => $faker->currencyCode,
        	];
        	$promos[] = $item;
        }
        DB::table('promos')->insert($promos);
    }
}
