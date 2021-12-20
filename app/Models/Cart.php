<?php

namespace App\Models;
include 'functions.php';
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    public $products = null;
    public $totalPrice = 0;
    public $quantity = 0;

    public function __construct($cart)
    {
        if($cart){
            $this->products = $cart->products;
            $this->totalPrice = $cart->totalPrice;
            $this->quantity = $cart->quantity;
        }
    }

    public function addCart($product, $id){
        $newProduct = ['quantity' => 0,'price'=>$product->price, 'productInfo' => $product];
        if($this->products){
            if(array_key_exists($id, $this->products))
                $newProduct = $this->products[$id];
        }
        $newProduct['quantity']++;
        $newProduct['price'] = $newProduct['quantity'] * $product->price;
        $this->products[$id] = $newProduct;
        $this->totalPrice += $product->price;
        $this->quantity++;

    }
    public function deleteCart($product_code)
    {   
        // cap nhat tong so luong
        $this->quantity -= $this->products[$product_code]['quantity'];
        
        // cap nhat tong so tien
        $this->totalPrice -= $this->products[$product_code]['price'];

        // xoa doi tuong  $this->products[$product_code]
        unset($this->products[$product_code]);
    }

    public function updateCart($product_code, $quantity)
    {
        // tru cai cu
        $this->quantity -= $this->products[$product_code]['quantity'];
        $this->price -= $this->products[$product_code]['price'];
        $this->totalPrice -= $this->products[$product_code]['price'];

        // cap nhap cai moi
        $this->products[$product_code]['quantity'] = $quantity;
        $this->products[$product_code]['price'] = $quantity * $this->products[$product_code]['productInfo']->price;


        //cong lai
        $this->quantity += $this->products[$product_code]['quantity'];
        $this->price += $this->products[$product_code]['price'];
        $this->totalPrice += $this->products[$product_code]['price'];

    }
    public function money($money){
        return currency_format($money);
    }
    public function VNDtoUSD($money){
        return number_format($money * 0.000044, 2, '.', ',');
        
    }
}
