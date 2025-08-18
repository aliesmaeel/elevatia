<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable=[
        'type',
        'slug',
        'title',
        'permit_number',
        'price',
        'city',
        'community_id',
        'sub_community_id',
        'description',
        'size',
        'parking',
        'agent_id',
        'featured',
        'furnished',
        'active',
        'amenity_id',
        'image',
        'latitude',
        'longitude',
    ];


    public function community()
    {
        return $this->belongsTo(Community::class);
    }

    public function subCommunity()
    {
        return $this->belongsTo(SubCommunity::class);
    }

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    public function amenities()
    {
        return $this->belongsToMany(Amenity::class,'property_amenity');
    }

    protected function location(): \Attribute
    {
        return \Attribute::make(
            get: fn (mixed $value, array $attributes) => [
                'latitude' => $attributes['latitude'],
                'longitude' => $attributes['longitude']
            ],
            set: fn (array $value) => [
                'latitude' => $value['latitude'],
                'longitude' => $value['longitude']
            ],
        );
    }

    public function scopeActive($query)
    {
        return $query->where('active',1);
    }


    public function propertyImages()
    {

        return $this->hasMany(PropertyImage::class);
    }



}
