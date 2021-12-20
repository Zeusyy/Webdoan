<?php
namespace App\Services;

use App\Models\Receipt;
use App\Models\Receipt_Detail;
use App\Repositories\BookingRepositoryInterface;
use App\Repositories\HotelRepositoryInterface;
use App\Repositories\ReceiptDetailRepositoryInterface;
use App\Repositories\RoomRepositoryInterface;
use App\Repositories\TourRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingService implements BookingServiceInterface{
    private $booking;

    private $receipt;

    private $product;

    private $receipt_detail;

    private $tourRepository;

    private $roomRepository;

    private $hotelRepository;


    private $receiptStatusAcceptedID    = 1;

    private $receiptStatusWaitingID     = 3;

    private $receiptStatusReceivedID    = 4;

    private $receiptStatusMomoWaiting   = 5;

    public function __construct
    (
        HotelRepositoryInterface            $hotelRepository,

        RoomRepositoryInterface             $roomRepository,

        TourRepositoryInterface             $tourRepository,

        ProductServiceInterface             $product ,

        BookingRepositoryInterface          $booking,

        ReceiptServiceInterface             $receipt,

        ReceiptDetailRepositoryInterface    $receipt_detail
    )
    {
        $this->hotelRepository  = $hotelRepository;

        $this->tourRepository   = $tourRepository;

        $this->roomRepository   = $roomRepository;

        $this->product          = $product;

        $this->booking          = $booking;

        $this->receipt          = $receipt;

        $this->receipt_detail   = $receipt_detail;
    }
    public function updatePurchaseNumber($product_code)
    {
        if( $product_code[0] == 't'  )
        {
            $tour = $this->tourRepository->searchCode($product_code);

            $tour->purchases_number++;

            $this->tourRepository->store($tour);
        }
        else{
            $room = $this->roomRepository->getRoomByCode($product_code);

            $room->purchases_number++;

            $this->roomRepository->store($room);

            $hotel = $room->hotel;

            $hotel->purchases_number++;

            $this->hotelRepository->store($hotel);
        }
    }
    public function createReceipt($payment)
    {
        $receipt1               = new Receipt;

        $receipt1->id           = time();

        $receipt1->user_id      = Auth::user()->id;

        $receipt1->price_sum    = 0;

        $receipt1->payment_id   = $payment;

        $receipt1->description  = "";

        if($payment == 3)
            $receipt1->status_id = $this->receiptStatusReceivedID;

        if($payment == 4) //momo
            $receipt1->status_id = $this->receiptStatusMomoWaiting;

        $this->receipt->store($receipt1);

        return $receipt1;
    }
    public function createReceiptDetail($data,$payment)
    {
        $receipt1 = $this->createReceipt($payment);

        foreach ($data as $product )
        {
            $product1                       = $this->product->getProductByCode($product['key']);
            
            $product_id                     = $product1->id;
            
            $receipt1_detail                = new Receipt_Detail;
            
            $receipt1_detail->receipt_id    = $receipt1->id;
            
            $receipt1_detail->product_id    = $product_id;
            
            $receipt1_detail->product_code  = $product['key'];
            
            $receipt1_detail->quantity      = $product['value'];

            if($product1->category_id == 2) //2 is tour 1 is hotel
                $price_per_unit             = $this->tourRepository->searchCode($receipt1_detail->product_code)->price;
            else
                $price_per_unit             = $this->roomRepository->getRoomByCode($receipt1_detail->product_code)->price;

            $receipt1_detail->price         = $price_per_unit * $receipt1_detail->quantity;

            $receipt1->price_sum            += $receipt1_detail->price;

            if( !is_null($product['date']) )
            {
                $receipt1_detail->description = "checkin: ".$product['date'].'  '.$product['day'].' day(s)';
            }
            else   
                $receipt1_detail->description = "";

            //update purchases number
            $this->updatePurchaseNumber($product['key']);

            $this->receipt_detail->store($receipt1_detail);
            // dd($product['key']);
        }
        $this->receipt->store($receipt1);

        return $receipt1;
        // dd($data);
        
    }
    public function store(Request $request)
    {
        $receipt1 = $this->createReceiptDetail($request->data,$request->payment);
        
        if($request->payment != 4) //except momo
            $request->session()->forget('Cart');
  
        return $receipt1;
    }
}