<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCommunity extends Model
{
    protected $fillable=['name','community_id'];

    public function community(){

        return $this->belongsTo(Community::class,'community_id');
    }
    public function properties()
    {
        return $this->hasMany(Property::class);
    }


}
