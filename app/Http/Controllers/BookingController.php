<?php

namespace App\Http\Controllers;

use App\Services\BookingServiceInterface;
use App\Services\MomoServiceInterface;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    private $booking;
    private $momo;
    public function __construct
    (
        BookingServiceInterface $booking,
        MomoServiceInterface $momo
    )
    {
        $this->booking = $booking;
        $this->momo = $momo;
    }
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if($request->payment == 4)
            return $this->momo->checkout($request); 
        return $this->booking->store($request);
          
    }

}
