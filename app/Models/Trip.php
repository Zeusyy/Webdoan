<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    //
    protected $table = 'tours';
    protected $fillable = [
        'title','content','tour_code',
        'price','day_start','place_start',
        'space_available','time_start',
        'day_number'
    ];
    public function subTrip()
    {
        return $this->hasMany(SubTrip::class);
    }
}
