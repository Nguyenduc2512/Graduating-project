<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $comments = [];
        $UserIDs  = DB::table('users')->pluck('id');
        $ProductIDs  = DB::table('products')->pluck('id');
        $faker = Faker\Factory::create();
        for ($i=0; $i < 10; $i++) {
        	$item = [
                'user_id'      => $faker->randomElement($UserIDs),
        		'product_id' => $faker->randomElement($ProductIDs),
        		'content' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        	];
        	$comments[] = $item;
        }
        DB::table('comments')->insert($comments);
    }
}
