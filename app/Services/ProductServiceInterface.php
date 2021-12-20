<?php
namespace App\Services;

use App\Models\Products;
use Illuminate\Http\Request;

interface ProductServiceInterface {

    public function getProductByID ($id);

    public function getProductByCode ($product_code);

    public function showProductDetail ($code);

    public function delete (Products $products);
    
}