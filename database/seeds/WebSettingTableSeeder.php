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
                'logo' => 'client/images/logo.png',
                'logoblue' => 'client/images/logoblue.png',
                'address' => '54 đường Mỹ Đình, Hà Nội',
                'email' => 'AuthShoe@gmail.com',
                'hotline' => '012321312312',
                'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8276297077596!2d105.80170781493275!3d21.039581885992376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abd4272871c5%3A0x52e3cbbb662f8b60!2sShop%20b%C3%A1n%20gi%C3%A0y%20Auth%20Shose!5e0!3m2!1svi!2s!4v1571453250440!5m2!1svi!2s"
                width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="'
            ]
        );
    }
}
