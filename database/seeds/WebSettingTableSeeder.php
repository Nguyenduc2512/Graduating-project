<?php

use Illuminate\Database\Seeder;

class WebSettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('web_setting')->insert(
            [
                'name' => 'white_logo',
                'content' => 'client/images/logo.png',
            ],

            [
                'name' => 'blue_logo',
                'content' => 'client/images/logoblue.png',
            ],

            [
                'name' => 'hotline',
                'content' => '0123456789',
            ]
        );
    }
}
