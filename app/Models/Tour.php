<?php

namespace App\Models;
include 'functions.php';
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    //
    
    protected $fillable = [
        'title','content','tour_code',
        'price','day_start','place_start',
        'space_available','time_start',
        'day_number','purchases_number',
        'category_id'
    ];
    
    public function subTour()
    {
        return $this->hasMany(SubTour::class);
    }

    public function transport()
    {
        return $this->belongsTo(Transport::class);
    }

    public function CityProvince(){
        return $this->belongsTo(CityProvince::class);
    }
    // public function receiptDetail()
    // {
    //     return $this->hasMany(Receipt_Detail::class,'product_code');
    // }


    public function day(){
        
        $date = $this->departure_date;
        $day = date('d',strtotime($date));
        $month = date('m',strtotime($date));
        $year = date('Y',strtotime($date));

        return $day . "/" . $month . "/" . $year;
    }

    
    public function money($money){
        return currency_format($money);
    }
}
