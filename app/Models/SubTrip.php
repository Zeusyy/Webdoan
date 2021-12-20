<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubTrip extends Model
{
    //
    protected $table = 'sub_tours';
    public $timestamps = false;
    protected $fillable = [
        'title','content','tour_id',
        
    ];

    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }
    
}
