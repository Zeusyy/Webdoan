<?php
namespace App\Repositories;

use App\Http\Requests\TourRequest;
use App\Models\CityProvince;
use App\Models\SubTour;
use App\Models\Tour;
use App\Models\Transport;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TourRepository implements TourRepositoryInterface
{
    public function delete($id)
    {
        Tour::destroy($id);
    }

    public function store(Tour $tour){
        $tour->save();
    }

    // lay tat ca tour theo thu tu moi nhat, 12 tour moi trang
    public function all(){
        //
        return Tour::orderBy('id','desc')->paginate(12);
    }

    public function search($keyword)
    {
        return Tour::where('name','like','%'.$keyword.'%')
            ->orderBy('id','desc')
            ->paginate(12);
    }
    public function searchCode($product_code){
        return Tour::where('product_code',$product_code)->first();
    }

    public function searchID($tour_id){
        return Tour::find($tour_id);
    }

    public function getAllCityProvince()
    {
        return CityProvince::all();
    }

    public function getAllTransport() {
        return Transport::all();
    }

    public function getTopPurchases($number)
    {
        return Tour::orderBy('purchases_number','DESC')
        ->take($number)
        ->get();
    }
    public function searchAndSort($keyword,$sort_type)
    {
        return Tour::where('name','like','%'.$keyword.'%')
            ->orderBy('price',$sort_type)
            ->paginate(12);
    }
    
    public function searchPlace($place_id){
        return Tour::where('city_province_id',$place_id)
        ->paginate(12);
    }
}