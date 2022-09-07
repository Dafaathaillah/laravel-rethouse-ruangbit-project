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
        'image',
        'status_property',
        'street',
        'picture',
        'city_id',
        'provience_id',
        'description',
        'ads_id',
        'bedroom',
        'bathroom',
        'garage',
        'property_size',
        'area',
        'features',
        'image_transaction'
    ];

    public function typeProperty(){
        return $this->belongsTo(TypeProperty::class);
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

}


