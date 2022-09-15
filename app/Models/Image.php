<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;



    public function property(){
        return $this->belongsTo(Property::class);
    }

    public static function getImageByProperty($id){
        return Image::where('property_id', $id)->get();
    }

    public static function destroyByProperty($property_id)
    {
        Image::where('property_id', $property_id)->delete();
    }
}
