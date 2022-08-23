<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $table = "property";
    protected $primaryKey = 'id'; 
    public $timestamps = false;
    protected $fillable=[
        'type_property_id',
        'name',        
        'price',
        'status_property',
        'street',
        'city_id',
        'provience_id',        
        'description'
    ];

    // public function typeProperty(){
    //     return $this->belongsTo(TypeProperty::class);
    // }
}


