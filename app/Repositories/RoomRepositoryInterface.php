<?php
namespace App\Repositories;

use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Http\Request;

interface RoomRepositoryInterface{
    public function getRoomType(RoomType $room);

    public function store(RoomType $room);

    public function getAllHotel();

    public function destroy(RoomType $room);

    public function getRoomByCode($product_code);
    
    public function getTopPurchases($number);
}