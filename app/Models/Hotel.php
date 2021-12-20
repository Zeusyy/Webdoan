<?php

namespace App\Models;
include 'functions.php';
use Illuminate\Database\Eloquent\Model;
// use App\Models\Room;

class Hotel extends Model
{
    //
    protected $fillable = [
        'name','category','price_avg','category_id'
    ];



    
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function roomtype()
    {
        return $this->hasMany(RoomType::class);
    }
    public function CityProvince(){
        return $this->belongsTo(CityProvince::class);
    }
    public function money($money){
        return currency_format($money);
    }

}
