<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $fillable=[
        'name',
        'email',
        'phone',
        'image',
        'description',
        'experience',
        'languages',
        'position',
    ];

    protected $casts = [
        'languages' => 'array',
        'experience' => 'integer',
    ];

    public function properties()
    {
        return $this->hasMany(Property::class);
    }


}
