<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ht_booking;
use App\Models\Receipt;
use App\Models\Receipt_Detail;
use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Support\Facades\Auth;
use DateTime;


// not use

class HotelBookingController extends Controller
{
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(RoomType $room)
    {
        //
        return view('user.hotel.roomType.booking')
        ->with('roomtype',$room);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createReceipt1()
    {
        $receipt = new Receipt;
        $receipt->user_id = Auth::user()->id;
        $receipt->price_sum = 0;
        $receipt->description = "";
        // $receipt->save();
        
        return $receipt;
    }
    public function createReceiptDetail(int $room_id)
    {
        $receipt_id = $this->createReceipt1()->id;
        $room = Room::where('id',$room_id)->first();
        $type = $room->type;
        $receiptDetail = new Receipt_Detail;
        $receiptDetail->receipt_id = $receipt_id;
        $receiptDetail->category = "nơi ở";
        $price = $type->price_per_night;

        // so luong 1 phong duy nhat
        $quantity = 1; 

        $receiptDetail->unit_price = $price;
        $receiptDetail->quantity = $quantity;

        //cap nhat lai tong gia tien cua receipt
        $receipt = Receipt::where('id',$receipt_id)->first();
        $receipt->price_sum = $price * $quantity;

        $receipt->save();
        $receiptDetail->save();

        return $receiptDetail;
    }
    public function store(Request $request)
    {
        // $request->arrive la String
        //kieu du lieu datetime
        $arrive = DateTime::createFromFormat('Y-m-d',
            $request->arrive);
        $checkout = DateTime::createFromFormat('Y-m-d',
            $request->checkout);
        
        
        $booking = new ht_booking;
        $room_id = $request->room_id;
        $booking->room_id = $room_id;

        $booking->receipt_detail_id = 
        $this->createReceiptDetail($room_id)->id;

        $booking->arrive = $arrive;
        $booking->checkout = $checkout;

        $room = Room::where('id',$room_id)->first();
        $hotel = $room->hotel;

        $description = $hotel->name." - ".$room->room_number;

        $booking->description = $description;
        $booking->save();
        
        return redirect()->route('user');
    }


} 
