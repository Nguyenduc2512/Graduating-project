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
        DB::table('admins')->insert(
            [
                'name' => 'Ducruoi',
                'email' => 'nguyenduc2512@gmail.com',
                'password' => bcrypt('123123'),
                'gender' => '1',
                'avatar'=> 'default.jpg'
            ]
        );
    }
}
