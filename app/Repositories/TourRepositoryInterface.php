<?php
namespace App\Repositories;

use App\Http\Requests\TourRequest;
use App\Models\Tour;

use Illuminate\Http\Request;

interface TourRepositoryInterface
{
    public function delete($id);

    public function store(Tour $tour);

    public function all();

    public function search($keyword);

    public function searchCode($product_code);

    public function searchID($tour_id);

    public function getAllCityProvince();

    public function getAllTransport();

    public function getTopPurchases($number);

    public function searchAndSort($keyword,$sort_type);
    
    public function searchPlace($place_id);
}