<?php

namespace App\Models;

use App\Models\Scopes\ActiveScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Property extends Model

{
    use HasFactory;
    protected $fillable=[
        'type',
        'slug',
        'title',
        'permit_number',
        'price',
        'city_id',
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
        'address',
        'bedrooms',
        'bathrooms',
        'garage',
        'build_year',
        'rating',
        'reviews',
        'is_premium',
        'status',
    ];

    ///get price attribute to format price with comma
    protected function price(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => number_format($value),
            set: fn ($value) => str_replace(',', '', $value),
        );
    }
    protected static function booted()
    {
        static::addGlobalScope(new ActiveScope());
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

    public function city()
    {
        return $this->belongsTo(City::class);
    }
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



    public function scopeActive($query)
    {
        return $query->where('active',1);
    }


    public function propertyImages()
    {
        return $this->hasMany(PropertyImage::class);
    }



}
