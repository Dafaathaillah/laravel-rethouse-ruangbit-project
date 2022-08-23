<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $table = "property";
    protected $fillable=[
        'name',
        'price',
        'status',
        'street',
        'city',
        'provience',
        'type_property',
        'description'
    ];

    public function typeProperty(){
        return $this->belongsTo(TypeProperty::class);
    }
}


