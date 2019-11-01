<?php

use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $contacts = [];
        $AdminIDs  = DB::table('admins')->pluck('id');
        $faker = Faker\Factory::create();
        for ($i=0; $i < 10; $i++) {
        	$item = [
        		'name' => $faker->name,
        		'email' => $faker->freeEmail,
        		'content' => $faker->realText($maxNbChars = 200, $indexSize = 2),
                'rep_by_admin_id' => $faker->randomElement($AdminIDs),
        	];
        	$contacts[] = $item;
        }
        DB::table('contacts')->insert($contacts);
    }
}
