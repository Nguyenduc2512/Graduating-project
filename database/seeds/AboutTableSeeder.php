<?php

use Illuminate\Database\Seeder;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about')->insert(
            [
                'info' => 'Auth-Shoes được thành được thành lập từ tháng 9 năm 2019, là shop bán giày uy tín hàng đầu tại Việt Nam dành riêng cho phái mạnh.',
                'mission' => 'Sáng tạo và trẻ trung là yếu tố tiên phong khiến cho các thiết kế của Auth-Shoes luôn tạo sự thu hút và đón nhận nhiệt tình từ giới trẻ. Không chỉ thể hiện tinh tế và sang trọng đối với dòng sản phẩm Vestton, guu thời trang Auth-Shoes còn khơi dậy chất trẻ trung, năng động và đa dạng trên các dòng sản phẩm hằng ngày từ Nike, Addidas, Gucci, Converse,... giúp phái mạnh có thêm nhiều lựa chọn và kết hợp phong phú trong phong cách thời trang của chính mình.',
                'vision' => 'Sự nỗ lực và không ngại thay đổi đã tạo nên sự khác biệt kiên định cho các dòng sản phẩm của Auth Shoes. Mong muốn của chúng tôi không chỉ dừng lại ở câu chuyện sản xuất, cung cấp các sản phẩm thời trang mà còn hướng đến việc truyền cảm hứng thời trang, góp phần định hướng phong cách thời trang trẻ trung và phù hợp dành riêng cho phái mạnh. Bên cạnh việc phát triển các hệ thống cửa hàng, Auth Shoes còn chú trọng phát triển hệ thống chăm sóc và bán hàng online, đặt - giao hàng nhanh chóng đến tận tay người tiêu dùng trên toàn quốc thông qua website: AuthShoes.com.',
                'slogan' => 'Chọn Auth-Shoes, bạn đang lựa chọn sự hoàn hảo cho điểm nhấn thời trang của chính mình!'
            ]
        );
    }
}
