<?php

use Illuminate\Database\Seeder;

class  AlbumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $album = [];
        $ProductIDs  = DB::table('products')->pluck('id');
        $faker = Faker\Factory::create();
        for ($i=0; $i < 10; $i++) {
            $item = [
                'product_id'      => $faker->randomElement($ProductIDs),
                'picture' => 'images/product/'. $faker->image($dir = 'public/images/product', $width = 640, $height = 480, 'cats', false),

            ];
            $album[] = $item;
        }
        DB::table('album')->insert($album);
    }
}
