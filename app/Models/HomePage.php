<?php

namespace App\Models;

use App\Models\Scopes\ActiveScope;
use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    protected $fillable = [
        'banner',
        'about_elevatia',
        'our_vision',
        'our_mission',
        'active',
    ];


    protected static function booted()
    {
        static::addGlobalScope(new ActiveScope());
    }


}
