<?php

use Illuminate\Database\Seeder;

class ColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $color = [];
        $faker = Faker\Factory::create();
        for ($i=0; $i < 10; $i++) {
            $item = [
                'name' => $faker->name,
            ];
            $color[] = $item;
        }
        DB::table('colors')->insert($color);
    }
}
