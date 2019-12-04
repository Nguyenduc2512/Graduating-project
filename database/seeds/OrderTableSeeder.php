<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order = [];
        $UserIDs  = DB::table('users')->pluck('id');
        $faker = Faker\Factory::create();
        for ($i=0; $i < 10; $i++) {
            $item = [
                'code_order' => $faker->countryCode,
                'user_id'      => $faker->randomElement($UserIDs),
                'total_price' => rand(1000000,4000000),
                'promo' => null,
                'location' => $faker->address,
                'status' => rand(0,3),
            ];
            $carts[] = $item;
        }
        DB::table('orders')->insert($carts);
    }
}
