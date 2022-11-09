<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class City extends Model
{
    use HasFactory;

    protected $appends = ['name'];
    public function getNameAttribute()
    {
        if ($locale = App::currentLocale() == "ar") {
            return $this->ar_name;
        } else {
            return $this->en_name;
        }
    }

    public function Country(){
        return   $this->belongsTo(Country::class ,'country_id');
    }

}
