<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Services\HotelServiceInterface;
use App\Services\ProductServiceInterface;
use App\Services\TourServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    private $product;
    private $hotel;
    private $tour;
    
    public function __construct
    (
        ProductServiceInterface $product,
        HotelServiceInterface   $hotel,
        TourServiceInterface    $tour
    )
    {
        $this->product  = $product;
        $this->hotel    = $hotel;
        $this->tour     = $tour;
    }
    public function userOrAdmin()
    {
        if(!Auth::check() || Auth::user()->role->name == 'user')
           return 'user';
        else{
           return 'admin';
        }
    }
    //
    public function showProduct($code) {
        return $this->product->showProductDetail($code);
    }
    public function sort(Request $request) {
        $product_type   = $request->product_type;
        $keyword        = $request->keyword;
        
        $sort_type = $request->sort_type;

        if($product_type == 'hotel')
        {
            $hotels = $this->hotel->searchAndSort($keyword,$sort_type);


            // hien tai chua co site admin.*.change
            // $role = $this->userOrAdmin();
            $role = 'user';
        
            $view = $role . ".hotel.change";
            
            return view($view)
            ->with('hotels',$hotels);
        }
        if($product_type == 'tour')
        {
            $tours = $this->tour->searchAndSort($keyword,$sort_type);

            // hien tai chua co site admin.*.change
            // $role = $this->userOrAdmin();
        
            $role = 'user';
            $view = $role . ".tour.change";
            
            
            return view($view)
            ->with('trips',$tours);
        }
    }
    public function place($place_id,$product_type)
    {
        
        if($product_type == 'hotel')
        {
            if($place_id == 0)
            {
                $hotels = $this->hotel->all();
            }
            else
                $hotels = $this->hotel->searchPlace($place_id);

            // $role = $this->userOrAdmin();
        
            // hien tai chua co site admin.*.change
            $role = 'user';
            $view = $role . ".hotel.change";
            
            return view($view)
            ->with('hotels',$hotels);
        }

        if($product_type == 'tour')
        {
            if($place_id == 0)
            {
                $tours = $this->tour->all();
            }
            else
                $tours = $this->tour->searchPlace($place_id);

            // $role = $this->userOrAdmin();
            $role = 'user';
        
            $view = $role . ".tour.change";
            
            return view($view)
            ->with('trips',$tours);
        }
    }

}
