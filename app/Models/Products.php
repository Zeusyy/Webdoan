<?php

namespace App\Models;
include 'functions.php';
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $fillable = [
        'product_code','name','avatar','category_id'
    ];
    public $timestamps = false;

    public function receipt(){
        return $this->hasMany(Receipt_Detail::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function money($money){
        return currency_format($money);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
