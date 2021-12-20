<?php
namespace App\Repositories;

use App\Models\Hotel;
use Illuminate\Http\Request;

interface HotelRepositoryInterface
{
    public function all();

    public function store(Hotel $hotel);

    public function delete($id);

    public function show($id);

    public function search($keyword);

    public function searchID($id);

    public function searchCode($product_code);

    public function getAllCityProvince();

    public function getTopPurchases($number);

    public function searchAndSort($keyword,$sort_type);
    
    public function searchPlace($place_id);
}