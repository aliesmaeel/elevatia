<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    protected $fillable=['name','slug','city_id'];

    public function properties()
    {
        return $this->hasMany(Property::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

}
