<?php
namespace App\Services;


use App\Models\Products;

use App\Models\RoomType;
use App\Repositories\ProductRepositoryInterface;
use App\Repositories\RoomRepositoryInterface;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;

class RoomService implements RoomServiceInterface {

    private $room;

    private $product;

    public function __construct
    (
        ProductRepositoryInterface  $product,

        RoomRepositoryInterface     $room
    )
    {
        $this->product  = $product;

        $this->room     = $room;
    }
    public function getRoomType (RoomType $room)
    {
        return $this->room->getRoomType($room);
    }
    public function store(Request $request)
    {
        $room               = new RoomType;

        $room->name         = $request->name;

        $room->hotel_id     = $request->hotel_id;

        $room->bed          = $request->bed_num ."-".$request->bed_type;

        $room->price        = $request->price;

        $room->area         = $request->area;

        $room->max_person   = $request->bed_num  * $request->bed_type;

        if(is_null($request->refund))
            $room->refund = false;
        else
            $room->refund = $request->refund;

        if(is_null($request->breakfast))
            $room->breakfast = false;
        else
            $room->breakfast = $request->breakfast;
        
        $room->price = $request->price;

        if(!empty($request->file('avatar')))
        {
            $uploadedFileUrl = Cloudinary::upload($request->file('avatar')->getRealPath(),[
                'folder' => 'FnGO/RoomImage',
            ])->getSecurePath();

            $room->avatar = $uploadedFileUrl;
        }
        // save fist to get id
        $this->room->store($room);

        // create a new product 
        $product1               = new Products;

        $product1->avatar       = $room->avatar;

        $product1->product_code = "hotel_" .$room->hotel->id ."_room_".$room->id;

        $product1->name         = $room->name;

        $product1->category_id  = 4;

        $this->product->save($product1);

        // update the product_code
        $room->product_code = $product1->product_code;
        $this->room->store($room); 

        return $room;
    }
    public function getAllHotel() {
        $this->room->getAllHotel();
    }
    public function update (Request $request, RoomType $room) {

        $room->name         = $request->name;

        $room->bed          = $request->bed_num ."-".$request->bed_type;

        $room->price        = $request->price;

        $room->area         = $request->area;

        $room->max_person   = $request->bed_num  * $request->bed_type;

        if(is_null($request->refund))
            $room->refund = false;
        else
            $room->refund = $request->refund;

        if(is_null($request->breakfast))
            $room->breakfast = false;
        else
            $room->breakfast = $request->breakfast;

        $room->price = $request->price;

        if(!empty($request->file('avatar')))
        {
            $uploadedFileUrl = Cloudinary::upload($request->file('avatar')->getRealPath(),[
                'folder' => 'FnGO/RoomImage',
            ])->getSecurePath();

            $room->avatar = $uploadedFileUrl;
        }

        $this->room->store($room);
    }

    public function destroy (RoomType $room) {
        
        $product_id = $this->product->getProductByCode($room->product_code)->id;

        $this->room->destroy($room);

        $this->product->destroy($product_id);
    }

    public function getRoomByCode ($code) {
        return $this->room->getRoomByCode($code);
    }
    public function getTopPurchases ($number) {
        return $this->room->getTopPurchases($number);
    }
}