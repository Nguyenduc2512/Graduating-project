<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [];
        $faker = Faker\Factory::create();
        for ($i=0; $i < 10; $i++) {
        	$item = [
        		'name' => $faker->name,
        		'email' => $faker->freeEmail,
        		'password' => bcrypt('12312'),
                'gender' => rand(1,3),
          		'avatar' => 'images/'. $faker->image($dir = 'public/images', $width = 640, $height = 480, 'cats', false),
        	];
        	$admins[] = $item;
        }
        DB::table('admins')->insert($admins);
    }
}
