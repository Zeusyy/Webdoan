<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    protected $fillable = [
        'category','description'
    ];

    public $timestamps = false;

    public function hotel(){
        return $this->hasMany(Hotel::class);
    }
}
