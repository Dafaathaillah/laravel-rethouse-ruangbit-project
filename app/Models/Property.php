<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Property extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $table = "property";
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable=[
        'type_property_id',
        'name',
        'id_user',
        'price',
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
        'image_transaction',
        'start_ads',
        'end_ads'
    ];

    public function typeProperty(){
        return $this->belongsTo(TypeProperty::class);
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function images(){
        return $this->morphMany(Media::class, 'model');
    }



}
