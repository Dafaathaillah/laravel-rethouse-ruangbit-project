<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User_testing extends Authenticatable
{
    protected $table = "users";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'name', 'email', 'contact', 'gender', 'password',
    ];
}
