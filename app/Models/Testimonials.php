<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
    protected $fillable = [
        'title',
        'name',
        'position',
        'description',
        'image',
    ];
    protected $table = 'testimonials';
}
