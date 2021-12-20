<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
include 'functions.php';
use App\Models\Room;

class RoomType extends Model
{
    public $day;
    public $checkin_date;
    //
    protected $fillable = [
        'name','hotel_id','max_person','price_per_night'
    ];
    public $timestamps = false;

    public function room()
    {
        return $this->hasMany(Room::class);
    }
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
    public function money($money){
        return currency_format($money);
    }
}
