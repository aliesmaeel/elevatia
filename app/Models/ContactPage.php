<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactPage extends Model
{
    protected $fillable= [
        'name',
        'image',
    ];

    public function scopeActive($query)
    {
        return $query->where('active',true);
    }

}
