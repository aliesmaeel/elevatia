<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $fillable=['name','email','phone','address','position','image'];

    public function properties()
    {
        return $this->hasMany(Property::class);
    }


}
