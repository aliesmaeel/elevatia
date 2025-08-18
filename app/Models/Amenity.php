<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
    protected $table='amenities';

    protected $fillable=['name','image'];

    public function properties()
    {
        return $this->belongsToMany(Property::class,'property_amenity');
    }


}
