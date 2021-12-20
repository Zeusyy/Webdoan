<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubTour extends Model
{
    //
    public $timestamps = false;
    protected $fillable = [
        'title','content','tour_id',
        
    ];

    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }
}
