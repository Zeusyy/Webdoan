<?php
namespace App\Services;

use Illuminate\Http\Request;

interface BookingServiceInterface {
    public function store(Request $request);
}