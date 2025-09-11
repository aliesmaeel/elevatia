<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OffPlanProject extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'address',
        'price_starts_from',
        'completion_date',
        'developer',
        'link',
        'first_installment',
        'under_construction',
        'on_handover',
        'features',
        'lat',
        'lng',
    ];


    protected function location(): \Attribute
    {
        return \Attribute::make(
            get: fn (mixed $value, array $attributes) => [
                'lat' => $attributes['lat'],
                'lng' => $attributes['lng']
            ],
            set: fn (array $value) => [
                'lat' => $value['lat'],
                'lng' => $value['lng']
            ],
        );
    }


    public function images()
    {
        return $this->hasMany(OffPlanImages::class);
    }

}
