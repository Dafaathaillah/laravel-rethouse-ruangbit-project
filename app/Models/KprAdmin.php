<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KprAdmin extends Model
{
    use HasFactory;
    protected $fillable = [
        'logo',
        'name',
        'suku_bunga',
        'tenor_max'
    ];
}
