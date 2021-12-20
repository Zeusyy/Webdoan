<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReceiptStatus extends Model
{
    //
    public $timestamps = false;

    public function receipt()
    {
        return $this->hasMany(Receipt::class,'status_id');
    }
}
