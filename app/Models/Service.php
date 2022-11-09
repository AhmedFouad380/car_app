<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
class Service extends Model
{
    use HasFactory;


    protected $appends = ['name','description'];
    public function getNameAttribute()
    {
        if ($locale = App::currentLocale() == "ar") {
            return $this->ar_name;
        } else {
            return $this->en_name;
        }
    }


    public function getDescriptionAttribute()
    {
        if ($locale = App::currentLocale() == "ar") {
            return $this->ar_description;
        } else {
            return $this->en_description;
        }
    }

    public function getImageAttribute($image)
    {
        if (!empty($image)) {
            return asset('uploads/Service') . '/' . $image;
        }
        return "";
    }

    public function setImageAttribute($image)
    {
        if (is_file($image)) {
            $imageFields = upload($image, 'Service');
            $this->attributes['image'] = $imageFields;
        }
    }
}
