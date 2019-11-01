<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
        for ($i=0; $i < 2; $i++) {
        	$item = [
        		'code' => $faker->currencyCode,
                'down' => rand(10,40),
                'start_time' => '11-11-2019',
                'end_time' => '11-12-2019',
                'role' => '100',
                'admin_id' => '2'
        	];
        	$promos[] = $item;
        }
        DB::table('promos')->insert($promos);
    }
}
