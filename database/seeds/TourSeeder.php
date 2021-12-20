<?php

use App\Models\Tour;
use Illuminate\Database\Seeder;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // 1 - coach 2-train 3-plane
        $price = rand(3000000,8000000);
        
            $tour =  Tour::create([
                'name' => 'ĐÀ LẠT – 4N3Đ – THÀNH PHỐ SƯƠNG MÙ',
                'content' => 'Tham quan 1 vong ĐÀ LẠT',
                'product_code' => 'tour_1',
                'price' => $price ,
                'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1632636749/FnGO/TourImage/main/hinh-anh-ho-xuan-huong-da-lat-ve-dem-hinh1_utcmrz.jpg',
                'departure_date' => DateTime::createFromFormat('Y-m-d',
                '2000-04-20'),
                'departure_place' => 'TPHCM',
                'passenger_num' => 10,
                'departure_time' => '05:30',
                'departure_hour' => 5,
                'departure_minute' => 30,
                'day_number' => 4,
                'city_province_id' => 3,
                'purchases_number' => 2,
                'transport_id'  => 1,
            ]);

            
            $tour =  Tour::create([
                'name' => 'TOUR NHA TRANG 3N3Đ- LỄ 30/04',
                'content' => 'Tham quan Nha Trang - Khánh Hoà',
                'product_code' => 'tour_2',
                'price' => $price ,
                'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636948122/FnGO/TourImage/main/nhatrang3_vnr3qr.jpg',
                'departure_date' => DateTime::createFromFormat('Y-m-d',
                '2000-04-20'),
                'departure_place' => 'TPHCM',
                'passenger_num' => 10,
                'departure_time' => '05:30',
                'departure_hour' => 5,
                'departure_minute' => 30,
                'day_number' => 4,
                'city_province_id' => 8,
                'purchases_number' => 3,
                'transport_id'  => 1,
            ]);

            $tour =  Tour::create([
                'name' => 'DU LỊCH TÂY BẮC - 5N-4Đ',
                'content' => 'KHÁM PHÁ TOÀN BỘ TÂY BẮC',
                'product_code' => 'tour_3',
                'price' => rand(6000000,8000000) ,
                'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636948123/FnGO/TourImage/main/taybac_kgqtk1.jpg',
                'departure_date' => DateTime::createFromFormat('Y-m-d',
                '2000-04-20'),
                'departure_place' => 'TPHCM',
                'passenger_num' => 10,
                'departure_time' => '05:30',
                'departure_hour' => 5,
                'departure_minute' => 30,
                'day_number' => 4,
                'city_province_id' => 9,
                'purchases_number' => 1,
                'transport_id'  => 1,
            ]);

            Tour::create([
                'name' => 'Quảng Ninh - Hạ Long - 3N2Đ',
                'content' => 'Tham quan Vịnh đẹp nhất Vịnh Bắc Bộ',
                'product_code' => 'tour_4',
                'price' => rand(5000000,7000000) ,
                'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636949900/FnGO/TourImage/main/vhl_u0ej4h.jpg',
                'departure_date' => DateTime::createFromFormat('Y-m-d',
                '2000-04-20'),
                'departure_place' => 'Hà Nội',
                'passenger_num' => 10,
                'departure_time' => '05:30',
                'departure_hour' => 5,
                'departure_minute' => 30,
                'day_number' => 4,
                'city_province_id' => 11,
                'purchases_number' => 4,
                'transport_id'  => 1,
            ]);

            Tour::create([
                'name' => 'PHÚ YÊN – 3N2Đ – NƠI ĐẤT PHÚ TRỜI YÊN',
                'content' => 'Tham quan 1 vong ĐÀ LẠT',
                'product_code' => 'tour_5',
                'price' => rand(4000000,6000000) ,
                'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636950439/FnGO/TourImage/main/phuyen_rypn8z.jpg',
                'departure_date' => DateTime::createFromFormat('Y-m-d',
                '2000-04-20'),
                'departure_place' => 'TPHCM',
                'passenger_num' => 10,
                'departure_time' => '05:30',
                'departure_hour' => 5,
                'departure_minute' => 30,
                'day_number' => 4,
                'city_province_id' => 13,
                'purchases_number' => 4,
                'transport_id'  => 1,
            ]);

            Tour::create([
                'name' => 'Tour du khảo về nguồn Miền Tây - 3N2Đ',
                'content' => 'Tham quan 1 vòng Miền Tây',
                'product_code' => 'tour_6',
                'price' => rand(3000000,5000000) ,
                'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636951384/FnGO/TourImage/main/mientay_ts682c.jpg',
                'departure_date' => DateTime::createFromFormat('Y-m-d',
                '2000-04-20'),
                'departure_place' => 'TPHCM',
                'passenger_num' => 10,
                'departure_time' => '05:30',
                'departure_hour' => 5,
                'departure_minute' => 30,
                'day_number' => 4,
                'city_province_id' => 5,
                'purchases_number' => 4,
                'transport_id'  => 3,
            ]);

            Tour::create([
                'name' => 'Hà Nội - Huế - 4N3Đ',
                'content' => 'Tham quan thành phố Huế thơ mộng',
                'product_code' => 'tour_7',
                'price' => rand(7000000,8000000) ,
                'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636951914/FnGO/TourImage/main/hue_oqln03.jpg',
                'departure_date' => DateTime::createFromFormat('Y-m-d',
                '2000-04-20'),
                'departure_place' => 'Hà Nội',
                'passenger_num' => 10,
                'departure_time' => '05:30',
                'departure_hour' => 5,
                'departure_minute' => 30,
                'day_number' => 4,
                'city_province_id' => 14,
                'purchases_number' => 4,
                'transport_id'  => 2,
            ]);

              Tour::create([
                'name' => ' TP.HCM - Hội An - 2N2Đ',
                'content' => 'Trải nghiệm du lịch Hội An',
                'product_code' => 'tour_8',
                'price' => rand(3000000,4000000) ,
                'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636952315/FnGO/TourImage/main/hoian_jwwwzs.jpg',
                'departure_date' => DateTime::createFromFormat('Y-m-d',
                '2000-04-20'),
                'departure_place' => 'TP.HCM',
                'passenger_num' => 10,
                'departure_time' => '07:30',
                'departure_hour' => 7,
                'departure_minute' => 30,
                'day_number' => 4,
                'city_province_id' => 15,
                'purchases_number' => 4,
                'transport_id'  => 1,
            ]);
    }
}
