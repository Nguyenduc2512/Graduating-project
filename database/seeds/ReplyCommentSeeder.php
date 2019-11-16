<?php

use Illuminate\Database\Seeder;

class ReplyCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reply_comments = [];
        $UserIDs  = DB::table('users')->pluck('id');
        $CommentIDs  = DB::table('comments')->pluck('id');
        $AdminIDs  = DB::table('admins')->pluck('id');
        $faker = Faker\Factory::create();
        for ($i=0; $i < 10; $i++) {
        	$item = [
                'user_id'      => $faker->randomElement($UserIDs),
                'comment_id'      => $faker->randomElement($CommentIDs),
                'admin_id'      => $faker->randomElement($AdminIDs),
        		'content' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        	];
        	$reply_comments[] = $item;
        }
        DB::table('reply_comments')->insert($reply_comments);
    }
}
