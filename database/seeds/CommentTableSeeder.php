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
        $faker = Faker\Factory::create();
        for ($i=0; $i < 10; $i++) { 
        	$item = [
        		'user_id' => rand(11, 20),
        		'product_id' =>rand(1, 10),
        		'content' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        	];
        	$comments[] = $item;
        }
        DB::table('comments')->insert($comments);
    }    
}
