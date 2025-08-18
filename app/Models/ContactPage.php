<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactPage extends Model
{
    protected $fillable= [
        'name',
        'image',
        'description_text',
        'active',
        'email',
        'phone'
    ];

    public function scopeActive($query)
    {
        return $query->where('active',true);
    }

}
