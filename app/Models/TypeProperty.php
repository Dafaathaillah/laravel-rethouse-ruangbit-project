<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeProperty extends Model
{
    use HasFactory;

    protected $table = "type_property";
    protected $fillable = [
        'name',
    ];
}

