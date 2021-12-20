<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    //
    protected $fillable = [
        'name',
    ];

    public $timestamps = false;

    public function tour(){
        return $this->hasMany(Tour::class);
    }
}
