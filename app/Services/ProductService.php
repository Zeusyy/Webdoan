<?php
namespace App\Services;

use App\Models\Products;
use App\Models\Receipt;
use App\Models\Receipt_Detail;
use App\Repositories\ProductRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductService implements ProductServiceInterface {

    private $product;

    private $tour;

    private $room;

    public function __construct
    (
        RoomServiceInterface        $room,

        TourServiceInterface        $tour,

        ProductRepositoryInterface  $product
    )
    {
        $this->room     = $room;

        $this->product  = $product;

        $this->tour     = $tour;
    }
    public function getProductByID ($id) {
        return $this->product->getProductByID($id);
    }
    public function getProductByCode ($product_code) {
        return $this->product->getProductByCode($product_code);
    }
    
    public function showProductDetail ($code) {
        if($code[0] == 't')
        {
            $tour_id = $this->tour->getTourByCode($code)->id;

            return redirect()->route('tour.show',$tour_id);
        }
        else
        {
            $hotel= $this->room->getRoomByCode($code)->hotel;

            return redirect()->route('hotel.show',$hotel);
        }
    }

    public function delete (Products $products) {
        $this->product->destroy($products->id);
    }
    
    
}
