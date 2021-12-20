<?php
namespace App\Services;

use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Http\Request;

interface RoomServiceInterface {

    public function getRoomType(RoomType $room);

    public function store(Request $request);

    public function getAllHotel();

    public function getRoomByCode($code);

    public function update(Request $request, RoomType $room);

    public function destroy(RoomType $room);
    
    public function getTopPurchases($number);
}