<?php
namespace App\Repositories;

use App\Models\Products;
use Illuminate\Http\Request;

interface ProductRepositoryInterface{

    public function getProductByID($id);

    public function getProductByCode($product_code);

    public function save(Products $products);
    
    public function destroy($id);
}