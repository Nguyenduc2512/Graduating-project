<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [];
        $faker = Faker\Factory::create();
        for ($i=0; $i < 10; $i++) { 
        	$item = [
        		'name' => $faker->name,
        		'email' => $faker->freeEmail,
        		'password' => bcrypt('12312'),
        		'phone' => rand(1, 100000000),
        		'location' => $faker->address,
        		'avatar' => 'images/'. $faker->image($dir = 'public/images', $width = 640, $height = 480, 'cats', false),
        		'status' => rand(0, 1),        		
        		'gender' => rand(0, 1),
        		'date_of_birth' => $faker->dateTime($max = 'now', $timezone = null),
        	];
        	$users[] = $item;
        }
        DB::table('users')->insert($users);
    }
}
