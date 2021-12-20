<?php

namespace App\Http\Controllers;

use App\Http\Requests\HotelRequest;
use App\Models\Hotel;
use App\Services\CommentServiceInterface;
use App\Services\HotelServiceInterface;
use App\Services\ProductServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HotelController extends Controller
{

    private $hotel;

    private $comment;

    private $productService;

    public function __construct
    (
        
        CommentServiceInterface $comment,

        HotelServiceInterface   $hotel,

        ProductServiceInterface $productService
    )
    {
        $this->comment          = $comment;

        $this->hotel            = $hotel;

        $this->productService   = $productService;
    }
    public function userOrAdmin()
    {
        if(!Auth::check() || Auth::user()->role->name == 'user')
           return 'user';
        return 'admin';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if($request->search)
            $hotels = $this->hotel->search($request->search);
            
        else
            $hotels = $this->hotel->all();

        $role           = $this->userOrAdmin();

        $CityProvinces  = $this->hotel->getAllCityProvince();

        $view           = $role . ".hotel.index";
        
        return view($view)
        ->with('hotels',        $hotels)
        ->with('CityProvinces',$CityProvinces);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $CityProvince = $this->hotel->getAllCityProvince();
        
        return view('admin.hotel.create')
        ->with('cty_province',$CityProvince);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HotelRequest $request)
    {
        //
        $this->hotel->store($request);
        
        return redirect()->route('hotel.index');
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $hotel this is hotel id
     * @param \App\Models\Hotel $hotel
     * @return \Illuminate\Http\Response
     */
    public function show($hotel)
    {
        //
        $hotel1 = $this->hotel->show($hotel);

        $role = $this->userOrAdmin();

        $comments = $this->comment->getAllCommentsOfProduct($hotel1->product_code);
        
        // convert comments json to plain old PHP array
        $array = json_decode($comments,true);
        
        // check array have comment or not
        $have_comment = true;
        if(!$array)
            $have_comment = false;

        $view = $role . ".hotel.detail";
        
        // return $comments;
        return view($view)
        ->with('comments',      $comments) // json
        ->with('have_comment',  $have_comment)
        ->with('hotel',         $hotel1);
        // return $hotel1;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @param \App\Models\Hotel $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        //
        $CityProvince = $this->hotel->getAllCityProvince();
        
        return view('admin.hotel.edit')
        ->with('hotel',         $hotel)
        ->with('cty_province',  $CityProvince);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param \App\Models\Hotel $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(HotelRequest $request,Hotel $hotel)
    {
        //
        // return $request;
        $this->hotel->update($request,$hotel);
        
        return redirect()->route('hotel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Hotel $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        //
        $this->hotel->delete($hotel);
        
        return redirect()->route('hotel.index');
    }
    public function quantity()
    {
        $quantity = Hotel::count();
        
        return $quantity;
    }
    public function indexManage()
    {
        $hotels = $this->hotel->all();
        $CityProvinces = $this->hotel->getAllCityProvince();

        return view('admin.manage hotel.index')
        ->with('hotels',$hotels)
        ->with('CityProvinces',$CityProvinces);
    }

    public function deleteManageAjax($id)
    {
        $deleteHotel        = $this->hotel->getHotelByID($id);
        $ProductRoomTypes   = $deleteHotel->roomtype;

        foreach($ProductRoomTypes as $roomType){
            $product= $this->productService->getProductByCode($roomType->product_code);
            $this->productService->delete($product);
        }
        
        $this->hotel->delete($deleteHotel);

        $hotels = $this->hotel->all();
        return view('admin.manage hotel.change')
        ->with('hotels',$hotels);

        return $deleteHotel;

    }
}
