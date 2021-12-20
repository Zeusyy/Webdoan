<?php
namespace App\Services;

use App\Http\Requests\TourRequest;
use App\Models\Products;
use App\Models\SubTour;
use App\Models\Tour;
use App\Repositories\ProductRepositoryInterface;
use App\Repositories\TourRepositoryInterface;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TourService implements TourServiceInterface
{
    private $tour;

    private $product;

    public function __construct 
    (
        ProductRepositoryInterface  $product,

        TourRepositoryInterface     $tour

    )
    {
        $this->product  = $product;

        $this->tour     = $tour;

    }

    public function delete(Tour $tour)
    {
        $this->tour->delete($tour->id);

        $product_id = $this->product->getProductByCode($tour->product_code)->id;

        $this->product->destroy($product_id);
    }

    public function store(TourRequest $request){

        $departure_date         = DateTime::createFromFormat('Y-m-d', $request->departure_date);
            
        $tour                   = new Tour;
        
        $tour->name             = $request->name;

        $tour->price            = $request->price;
        
        $tour->passenger_num    = $request->passenger_num;

        $tour->day_number       = $request->day_number;

        $tour->departure_date   = $departure_date;

        $tour->departure_place  = $request->departure_place;
        
        $tour->city_province_id = $request->cityProvince;

        $tour->transport_id     = $request->transport;

        // them so 0 vao dau gio va phut
        if($request->departure_hour < 10) 
            $departure_hour = "0".($request->departure_hour);
        else 
            $departure_hour = $request->departure_minute;

        if($request->departure_minute < 10) 
            $departure_minute = "0".$request->departure_minute;
        else 
            $departure_minute = $request->departure_minute;
        
        //ngoai view co 2 input hour va minute


        $tour->departure_hour   = $request->departure_hour;

        $tour->departure_minute = $request->departure_minute;

        $departure_time         = $departure_hour .":". $departure_minute;

        $tour->departure_time   = $departure_time;

        $tour->content          = $request->content;

        if( !empty($request->file('avatar')) )
        {
            $uploadedFileUrl = Cloudinary::upload($request->file('avatar')->getRealPath(),[
                'folder' => 'FnGO/TourImage',
            ])->getSecurePath();

            $tour->avatar = $uploadedFileUrl;
        }

        // save fist to get id
        // default product_code is tour
        $this->tour->store($tour); 

        for ($i=1; isset($request->subTripTitle[$i]); $i++) { 

            $subtrip            = new SubTour;

            $subtrip->title     = $request->subTripTitle[$i];

            $subtrip->tour_id   = $tour->id;

            $subtrip->day       = $i;

            $subtrip->content   = $request->subTripContent[$i];

            $subtrip->save();
        }
        
        // create a new product 
        $product1               = new Products;

        $product1->avatar       = $tour->avatar;

        $product1->product_code = "tour_" .$tour->id;

        $product1->name         = $tour->name;

        $product1->category_id  = 2;

        $this->product->save($product1);

        // update the product_code
        $tour->product_code = $product1->product_code;

        $this->tour->store($tour); 
    }

    // lay tat ca tour theo thu tu moi nhat, 12 tour moi trang
    public function all(){
        //
        return $this->tour->all();
    }

    public function search($keyword)
    {
        return $this->tour->search($keyword);
    }

    public function getTourByCode($product_code){
        return $this->tour->searchCode($product_code);
    }

    public function getTourByID($tour_id){
        return $this->tour->searchID($tour_id);
    }

    public function update(TourRequest $request, Tour $tour){

        $count                  = 0;

        $tour->name             = $request->name;

        $tour->price            = $request->price;

        $tour->content          = $request->content;
        
        $tour->passenger_num    = $request->passenger_num;

        $tour->day_number       = $request->day_number;

        $departure_date         = DateTime::createFromFormat('Y-m-d', $request->departure_date);

        $tour->departure_date   = $departure_date;

        $tour->departure_place  = $request->departure_place;

        $tour->city_province_id = $request->cityProvince;

        $tour->transport_id     = $request->transport;

        // them so 0 vao dau gio va phut
        if($request->departure_hour < 10)
            $departure_hour = "0".($request->departure_hour);
        else
            $departure_hour = $request->departure_minute;

        if($request->departure_minute < 10) 
            $departure_minute = "0".$request->departure_minute;
        else 
            $departure_minute = $request->departure_minute;
        
        //ngoai view co 2 input hour va minute

        $tour->departure_hour   = $request->departure_hour;

        $tour->departure_minute = $request->departure_minute;

        $departure_time         = $departure_hour .":". $departure_minute;

        $tour->departure_time   = $departure_time;
        
        if( !empty($request->file('avatar')) )
        {
            $uploadedFileUrl = Cloudinary::upload($request->file('avatar')->getRealPath(),[
                'folder' => 'FnGO/TourImage',
            ])->getSecurePath();

            $tour->avatar = $uploadedFileUrl;
        }
        
        for ($i=1; isset($request->subTripTitle[$i]); $i++) { 
            if (isset($tour->subTour[$i-1])) {

                $subtrip            = $tour->subTour[$i-1];

                $subtrip->title     = $request->subTripTitle[$i];

                $subtrip->content   = $request->subTripContent[$i];

                $subtrip->save();
            }
            else {
                $subtrip            = new SubTour;

                $subtrip->title     = $request->subTripTitle[$i];

                $subtrip->tour_id   = $tour->id;

                $subtrip->day       = $i;

                $subtrip->content   = $request->subTripContent[$i];

                $subtrip->save();
            }
            $count++;
        }

        $max = $tour->subTour->count();

        if($count < $max){
            for($i = 0; $i<($max - $count);$i++){
                $tour->subTour[$count+$i]->delete();
            }
        }
        $this->tour->store($tour);

        $product1               = $this->product->getProductByCode($tour->product_code);

        $product1->avatar       = $tour->avatar;

        $product1->product_code = $tour->product_code;

        $product1->name         = $tour->name;

        $this->product->save($product1);
    
    }
    public function getAllCityProvince()
    {
        return $this->tour->getAllCityProvince();
    }

    public function getAllTransport() {
        return $this->tour->getAllTransport();
    }
    
    public function getTopPurchases($number){
        return $this->tour->getTopPurchases($number);
    }
    
    public function searchAndSort($keyword,$sort_type)
    {
        return $this->tour->searchAndSort($keyword,$sort_type);
    }
    
    public function searchPlace($place_id)
    {
        return $this->tour->searchPlace($place_id);
    }
}