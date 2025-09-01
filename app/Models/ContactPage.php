<?php

namespace App\Models;

use App\Models\Scopes\ActiveScope;
use Illuminate\Database\Eloquent\Model;

class ContactPage extends Model
{
    protected $fillable= [
        'name',
        'image',
        'active'
    ];

    protected $table='contact_pages';

    protected static function booted()
    {
        static::addGlobalScope(new ActiveScope());
    }

}
