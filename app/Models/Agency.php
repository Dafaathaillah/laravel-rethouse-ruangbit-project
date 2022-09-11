<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    use HasFactory;
    protected $table = "agency";
    protected $primaryKey = 'id'; 
    public $timestamps = false;
    protected $fillable = [
        'name',
        'picture'                
    ];    
}
