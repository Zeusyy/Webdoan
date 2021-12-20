<?php
namespace App\Repositories;

use App\Models\Products;
use App\Models\Receipt;
use App\Models\Receipt_Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductRepository implements ProductRepositoryInterface {

    public function getProductByID($id){
        return Products::find($id);
    }

    public function getProductByCode($product_code){
        return Products::where('product_code',$product_code)->first();
    }

    public function save(Products $products)
    {
        $products->save();
    }
    
    public function destroy($id)
    {
        Products::destroy($id);
    }
}
