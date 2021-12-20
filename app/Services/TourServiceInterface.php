<?php
namespace App\Services;

use App\Http\Requests\TourRequest;
use App\Models\Tour;

use Illuminate\Http\Request;

interface TourServiceInterface
{
    public function delete(Tour $tour);

    public function store(TourRequest $request);

    public function all();

    public function search($keyword);

    public function getTourByCode($product_code);

    public function getTourByID($tour_id);

    public function update(TourRequest $request, Tour $tour);
    
    public function getAllCityProvince();

    public function getAllTransport();
    
    public function getTopPurchases($number);

    public function searchAndSort($keyword,$sort_type);

    public function searchPlace($place_id);
}