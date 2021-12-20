<?php
namespace App\Repositories;

use App\Models\CityProvince;
use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;

class HotelRepository implements HotelRepositoryInterface
{
    public function all() {
        return Hotel::paginate(12);
    }

    public function search($keyword)
    {
        return Hotel::where('name','like','%'.$keyword.'%')
        ->paginate(12);
    }

    public function searchID($id){
        return Hotel::find($id);
    }

    public function searchCode($product_code)
    {
        return Hotel::where('product_code',$product_code)
        ->first();
    }

    public function store(Hotel $hotel)
    {
        $hotel->save();  
    }
    
    public function delete($id)
    {
        Hotel::destroy($id);
    }

    public function show($id)
    {
        $hotel = Hotel::find($id);
        return $hotel;
    }
    
    public function getAllCityProvince()
    {
        return CityProvince::all();
    }

    public function getTopPurchases($number)
    {
        return Hotel::orderBy('purchases_number','DESC')
        ->take($number)
        ->get();
    }

    public function searchAndSort($keyword,$sort_type)
    {
        return Hotel::where('name','like','%'.$keyword.'%')
        ->orderBy('price',$sort_type)
        ->paginate(12);
    }
    
    public function searchPlace($place_id)
    {
        return Hotel::where('city_province_id',$place_id)
        ->paginate(12);
    }
}