<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CityProvince extends Model
{
    //
    protected $fillable = [
        'name',
    ];
    public $timestamps = false;
    public function hotel()
    {
        return $this->hasMany(Hotel::class);
    }
    public function tour()
    {
        return $this->hasMany(Tour::class);
    }
}
