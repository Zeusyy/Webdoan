<?php

use Illuminate\Database\Seeder;
use App\Models\Hotel;
use App\Models\RoomType;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        RoomType::create([
            'product_code' => 'hotel_1_room_1',
            'name' => 'Room 1',
            'hotel_id' => 1,
            'max_person' => 2,
            'price' => 2000000,
            'bed' => '1-2',
            'refund' => true,
            'breakfast' => true,
            'area' => 22,
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1633314438/FnGO/hotelImage/roomType/1_double_bed_tupdnd.jpg',
        ]);
        RoomType::create([
            'product_code' => 'hotel_1_room_2',
            'name' => 'Room 2',
            'hotel_id' => 1,
            'max_person' => 2,
            'price' => 2000000,
            'bed' => '1-2',
            'refund' => true,
            'breakfast' => true,
            'area' => 22,
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1633314438/FnGO/hotelImage/roomType/1_double_bed_tupdnd.jpg',
        ]);


        RoomType::create([
            'product_code' => 'hotel_2_room_1',
            'name' => 'Room 1',
            'hotel_id' => 2,
            'max_person' => 4,
            'price' => 3000000,
            'bed' => '2-2',
            'refund' => false,
            'breakfast' => false,
            'area' => 24,
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1633314428/FnGO/hotelImage/roomType/2_double_bed_zv5hjp.jpg',
        ]);
        RoomType::create([
            'product_code' => 'hotel_2_room_2',
            'name' => 'Room 2',
            'hotel_id' => 2,
            'max_person' => 4,
            'price' => 3000000,
            'bed' => '2-2',
            'refund' => false,
            'breakfast' => false,
            'area' => 24,
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1633314428/FnGO/hotelImage/roomType/2_double_bed_zv5hjp.jpg',
        ]);

        RoomType::create([
            'product_code' => 'hotel_3_room_1',
            'name' => 'Room 1',
            'hotel_id' => 3,
            'max_person' => 4,
            'price' => 3000000,
            'bed' => '2-2',
            'refund' => false,
            'breakfast' => false,
            'area' => 24,
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1633314428/FnGO/hotelImage/roomType/2_double_bed_zv5hjp.jpg',
        ]);
        RoomType::create([
            'product_code' => 'hotel_3_room_2',
            'name' => 'Room 2',
            'hotel_id' => 3,
            'max_person' => 4,
            'price' => 3000000,
            'bed' => '2-2',
            'refund' => false,
            'breakfast' => false,
            'area' => 24,
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1633314428/FnGO/hotelImage/roomType/2_double_bed_zv5hjp.jpg',
        ]);

        RoomType::create([
            'product_code' => 'hotel_4_room_1',
            'name' => 'Room 1',
            'hotel_id' => 4,
            'max_person' => 4,
            'price' => 3000000,
            'bed' => '2-2',
            'refund' => false,
            'breakfast' => false,
            'area' => 24,
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1633314428/FnGO/hotelImage/roomType/2_double_bed_zv5hjp.jpg',
        ]);
        RoomType::create([
            'product_code' => 'hotel_4_room_2',
            'name' => 'Room 2',
            'hotel_id' => 4,
            'max_person' => 4,
            'price' => 3000000,
            'bed' => '2-2',
            'refund' => false,
            'breakfast' => false,
            'area' => 24,
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1633314428/FnGO/hotelImage/roomType/2_double_bed_zv5hjp.jpg',
        ]);

         RoomType::create([
            'product_code' => 'hotel_5_room_1',
            'name' => 'Room 1',
            'hotel_id' => 5,
            'max_person' => 4,
            'price' => 3000000,
            'bed' => '2-2',
            'refund' => false,
            'breakfast' => false,
            'area' => 24,
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636894593/FnGO/roomImage/phongks3_brioev.jpg',
        ]);
        RoomType::create([
            'product_code' => 'hotel_5_room_2',
            'name' => 'Room 2',
            'hotel_id' => 4,
            'max_person' => 4,
            'price' => 3000000,
            'bed' => '2-2',
            'refund' => false,
            'breakfast' => false,
            'area' => 24,
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636894593/FnGO/roomImage/phongks3_brioev.jpg',
        ]);

         RoomType::create([
            'product_code' => 'hotel_6_room_1',
            'name' => 'Room 1',
            'hotel_id' => 6,
            'max_person' => 4,
            'price' => 3000000,
            'bed' => '2-2',
            'refund' => false,
            'breakfast' => false,
            'area' => 24,
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636894593/FnGO/roomImage/phongks3_brioev.jpg',
        ]);
        RoomType::create([
            'product_code' => 'hotel_6_room_2',
            'name' => 'Room 2',
            'hotel_id' => 6,
            'max_person' => 4,
            'price' => 3000000,
            'bed' => '2-2',
            'refund' => false,
            'breakfast' => false,
            'area' => 24,
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636894593/FnGO/roomImage/phongks3_brioev.jpg',
        ]);

        RoomType::create([
            'product_code' => 'hotel_6_room_3',
            'name' => 'Room 3',
            'hotel_id' => 6,
            'max_person' => 4,
            'price' => 3000000,
            'bed' => '2-2',
            'refund' => false,
            'breakfast' => false,
            'area' => 24,
            'avatar' => 'https://res.cloudinary.com/dloeyqk30/image/upload/v1636894902/FnGO/roomImage/phongks4_ksrkpa.jpg',
        ]);

    }
}
