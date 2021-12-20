<?php
namespace App\Repositories;

use App\Models\Hotel;
use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Http\Request;

class RoomRepository implements RoomRepositoryInterface{
    public function getRoomType(RoomType $room)
    {
        return RoomType::where('hotel_id',$room->hotel_id)->get();
    }

    public function store(RoomType $room)
    {
        $room->save();
    }

    public function getAllHotel()
    {
        return Hotel::all();
    }
    
    public function destroy(RoomType $room){
        $temp = $room->hotel;
        $room->delete();
        return $temp;
    }
    
    public function getRoomByCode($product_code){
        return RoomType::where('product_code',$product_code)->first();
    }

    public function getTopPurchases($number)
    {
        return RoomType::orderBy('purchases_number','DESC')
        ->take($number)
        ->get();
    }
}