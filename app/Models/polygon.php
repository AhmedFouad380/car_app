<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class polygon extends Model
{
    use HasFactory;

    public function City(){
        return   $this->belongsTo(City::class ,'city_id');
    }
}
