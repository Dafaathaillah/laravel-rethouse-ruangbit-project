<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_testing extends Model
{
    protected $table = "user_testing";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'name', 'email', 'password',
    ];
}
