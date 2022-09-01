<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    use HasFactory;
    protected $table = "terms";
    protected $primaryKey = 'id'; 
    public $timestamps = false;
    protected $fillable = [
        'name',                
    ];    
}