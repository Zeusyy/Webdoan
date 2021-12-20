<?php
namespace App\Services;

use App\Models\Hotel;
use Illuminate\Http\Request;

interface HotelServiceInterface
{
    public function all();

    public function store (Request $request);

    public function delete (Hotel $hotel);

    public function show ($id);

    public function search ($keyword);

    public function getHotelByID ($id);

    public function getAllCityProvince();

    public function update (Request $request, Hotel $hotel);
    
    public function getTopPurchases ($number);

    public function searchAndSort ($keyword,$sort_type);

    public function searchPlace ($place_id);

}