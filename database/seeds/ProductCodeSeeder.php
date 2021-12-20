<?php

use App\Models\Products;
use Illuminate\Database\Seeder;

class ProductCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // a temporary product
        


        Products::create([
            'product_code' => 'tour_1',
            'name' => 'ĐÀ LẠT – 4N3Đ – THÀNH PHỐ SƯƠNG MÙ',
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1632636749/FnGO/TourImage/main/hinh-anh-ho-xuan-huong-da-lat-ve-dem-hinh1_utcmrz.jpg',
            'category_id' => 2,
        ]);
        Products::create([
            'product_code' => 'tour_2',
            'name' => 'TOUR NHA TRANG 3N3Đ - BÃI BIỂN ĐẸP NHẤT VIỆT NAM',
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636948122/FnGO/TourImage/main/nhatrang3_vnr3qr.jpg',
            'category_id' => 2,
        ]);
        Products::create([
            'product_code' => 'tour_3',
            'name' => 'DU LỊCH TÂY BẮC - 3N-2Đ ',
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636948123/FnGO/TourImage/main/taybac_kgqtk1.jpg',
            'category_id' => 2,
        ]);
        Products::create([
            'product_code' => 'tour_4',
            'name' => 'Quảng Ninh - Hạ Long - 3N2Đ',
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636949900/FnGO/TourImage/main/vhl_u0ej4h.jpg',
            'category_id' => 2,
        ]);
        Products::create([
            'product_code' => 'tour_5',
            'name' => 'PHÚ YÊN – 3N2Đ – NƠI ĐẤT PHÚ TRỜI YÊN',
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636950439/FnGO/TourImage/main/phuyen_rypn8z.jpg',
            'category_id' => 2,
        ]);
        Products::create([
            'product_code' => 'tour_6',
            'name' => 'Tour du khảo về nguồn Miền Tây - 3N2Đ',
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636951384/FnGO/TourImage/main/mientay_ts682c.jpg',
            'category_id' => 2,
        ]);
        Products::create([
            'product_code' => 'tour_7',
            'name' => 'Huế - Quảng Bình - 4N3Đ',
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636951914/FnGO/TourImage/main/hue_oqln03.jpg',
            'category_id' => 2,
        ]);
         Products::create([
            'product_code' => 'tour_8',
            'name' => 'TP.HCM - Hội An - 2N-2Đ',
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636952315/FnGO/TourImage/main/hoian_jwwwzs.jpg',
            'category_id' => 2,
        ]);


        //hotel 
        Products::create([
            'product_code' => 'hotel_1',
            'name' => 'Khách Sạn Mường Thanh',
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636695729/FnGO/HotelImage/etqirvvm47dyeyxezxbz.jpg',
            'category_id' => 1,
        ]);
        Products::create([
            'product_code' => 'hotel_2',
            'name' => 'Khách Sạn Sheraton',
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636704421/FnGO/HotelImage/jirjz04g4syjxbyttcpd.jpg',
            'category_id' => 1,
        ]);
        Products::create([
            'product_code' => 'hotel_3',
            'name' => 'Khách Sạn Dạ Hương',
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636695250/FnGO/HotelImage/q5qzbwh1jetpkeud5o3e.jpg',
            'category_id' => 1,
        ]);
        Products::create([
            'product_code' => 'hotel_4',
            'name' => 'Palace Hotel',
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636695624/FnGO/HotelImage/hssew7aazgjbxln5aiuf.jpg',
            'category_id' => 1,
        ]);

        Products::create([
            'product_code' => 'hotel_5',
            'name' => 'Khách Sạn Rex',
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636684715/FnGO/HotelImage/oijopyphwbahhszgjsky.jpg',
            'category_id' => 1,
        ]);

         Products::create([
            'product_code' => 'hotel_6',
            'name' => 'Khách sạn Mường Thanh Luxury',
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1635854168/FnGO/HotelImage/k1vismer6ozplsfm8qi1.jpg',
            'category_id' => 1,
        ]);

        //hotel 1 seeder
        Products::create([
            'product_code' => 'hotel_1_room_1',
            'name' => 'Room 1',
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1633314438/FnGO/hotelImage/roomType/1_double_bed_tupdnd.jpg',
            'category_id' => 4,
        ]);
        Products::create([
            'product_code' => 'hotel_1_room_2',
            'name' => 'Room 2',
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1633314438/FnGO/hotelImage/roomType/1_double_bed_tupdnd.jpg',
            'category_id' => 4,
        ]);


        //hotel 2 seeder
        Products::create([
            'product_code' => 'hotel_2_room_1',
            'name' => 'Room 1',
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1633314428/FnGO/hotelImage/roomType/2_double_bed_zv5hjp.jpg',
            'category_id' => 4,
        ]);
        Products::create([
            'product_code' => 'hotel_2_room_2',
            'name' => 'Room 2',
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1633314428/FnGO/hotelImage/roomType/2_double_bed_zv5hjp.jpg',
            'category_id' => 4,
        ]);

        //hotel 3 seeder
        Products::create([
            'product_code' => 'hotel_3_room_1',
            'name' => 'Room 1',
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1633314428/FnGO/hotelImage/roomType/2_double_bed_zv5hjp.jpg',
            'category_id' => 4,
        ]);
        Products::create([
            'product_code' => 'hotel_3_room_2',
            'name' => 'Room 2',
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1633314428/FnGO/hotelImage/roomType/2_double_bed_zv5hjp.jpg',
            'category_id' => 4,
        ]);

        //hotel 4 seeder
        Products::create([
            'product_code' => 'hotel_4_room_1',
            'name' => 'Room 1',
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1633314428/FnGO/hotelImage/roomType/2_double_bed_zv5hjp.jpg',
            'category_id' => 4,
        ]);
        Products::create([
            'product_code' => 'hotel_4_room_2',
            'name' => 'Room 2',
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1633314428/FnGO/hotelImage/roomType/2_double_bed_zv5hjp.jpg',
            'category_id' => 4,
        ]);

         Products::create([
            'product_code' => 'hotel_5_room_1',
            'name' => 'Room 1',
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636894593/FnGO/roomImage/phongks3_brioev.jpg',
            'category_id' => 4,
        ]);
        Products::create([
            'product_code' => 'hotel_5_room_2',
            'name' => 'Room 2',
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636894593/FnGO/roomImage/phongks3_brioev.jpg',
            'category_id' => 4,
        ]);

         Products::create([
            'product_code' => 'hotel_6_room_1',
            'name' => 'Room 1',
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636894593/FnGO/roomImage/phongks3_brioev.jpg',
            'category_id' => 4,
        ]);
        Products::create([
            'product_code' => 'hotel_6_room_2',
            'name' => 'Room 2',
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636894593/FnGO/roomImage/phongks3_brioev.jpg',
            'category_id' => 4,
        ]);
        Products::create([
            'product_code' => 'hotel_6_room_3',
            'name' => 'Room 3',
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636894902/FnGO/roomImage/phongks4_ksrkpa.jpg',
            'category_id' => 4,
        ]);
    }
}
