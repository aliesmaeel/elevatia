<?php

namespace App\Models;

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

    public function scopeActive($query)
    {
        return $query->where('active', true);
    }



}
