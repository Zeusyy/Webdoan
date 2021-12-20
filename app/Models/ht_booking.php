<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ht_booking extends Model
{
    

    //
    protected $fillable = [
        'room_id','arrive','checkout','description'
    ];
    public function receiptDetail()
    {
        return $this->belongsTo(Receipt_Detail::class);
    }
    public function room()
    {
        return $this->hasOne(Room::class);
    }

}
