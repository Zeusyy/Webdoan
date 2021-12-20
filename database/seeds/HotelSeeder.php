<?php

use App\Models\Hotel;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // for ($i=1; $i < 6; $i++) { 
        //     $hotel = new Hotel([
        //         'name' => 'Khach san '.$i,
        //         'price_avg' => rand(1000,2000),
        //     ]);
        //     $hotel->save();
        // }
        $random = rand(1000000,2000000);
        // 1 - da nang
        //  2 - ha noi
        //  3 - HCM
        // 4 = BR-VT
        Hotel::create([
            'name' => 'Khách sạn Mường Thanh',
            'product_code' => 'hotel_1',
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636695729/FnGO/HotelImage/etqirvvm47dyeyxezxbz.jpg',
            'price' => $random,
            'address' => '36 - 38 Lâm Hoành, Phước Mỹ, Sơn Trà, Đà Nẵng, Việt Nam, 550000',
            'city_province_id' => 1,
            'purchases_number' => 1,
        ]);

        Hotel::create([
            'name' => 'Khách Sạn Sheraton',
            'product_code' => 'hotel_2',
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636704421/FnGO/HotelImage/jirjz04g4syjxbyttcpd.jpg',
            'price' => $random,
            'address' => 'Quận Hoàn Kiếm, Hà Nội',
            'city_province_id' => 2,
            'purchases_number' => 3,
        ]);

        Hotel::create([
            'name' => 'Khách Sạn Dạ Hương',
            'product_code' => 'hotel_3',
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636695250/FnGO/HotelImage/q5qzbwh1jetpkeud5o3e.jpg',
            'price' => rand(1000000,2000000),
            'address' => '43 Lê Thánh Tôn, Phường Bến Nghé, Quận 1, TP Hồ Chí Minh',
            'city_province_id' => 3,
            'purchases_number' => 2,
        ]);

        Hotel::create([
            'name' => 'Palace Hotel',
            'product_code' => 'hotel_4',
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636695624/FnGO/HotelImage/hssew7aazgjbxln5aiuf.jpg',
            'price' => rand(1000000,2000000),
            'address' => '21 Nguyễn Du, TP Bà Rịa, Vũng Tàu',
            'city_province_id' => 4,
            'purchases_number' => 4,
        ]);

        Hotel::create([
            'name' => 'Khách Sạn Rex',
            'product_code' => 'hotel_5',
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636684715/FnGO/HotelImage/oijopyphwbahhszgjsky.jpg',
            'price' => rand(1000000,2000000),
            'address' => '23 Nguyễn Trãi, Quận 1, TP.Hồ Chí Minh',
            'city_province_id' => 2,
            'purchases_number' => 4,
        ]);

         Hotel::create([
            'name' => 'Khách Sạn Mường Thanh Luxury Phú Quốc',
            'product_code' => 'hotel_6',
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1635854168/FnGO/HotelImage/k1vismer6ozplsfm8qi1.jpg',
            'price' => rand(1000000,2000000),
            'address' => 'Tổ 3 Ấp, Đường Bào, Huyện Phú Quốc, Kiên Giang',
            'city_province_id' => 12,
            'purchases_number' => 4,
        ]);
        
        
    }
}
