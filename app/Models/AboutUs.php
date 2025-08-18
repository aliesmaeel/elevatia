<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

    class AboutUs extends Model
{
    protected $fillable=[
        'about-us',
        'about-us-image',
        'our-vision',
        'customer-satisfaction',
        'customer-satisfaction-images',
        'quality',
        'quality-images',
        'integrity',
        'integrity-images',
        'innovation',
        'trust-heading',
        'quote',
    ];

        protected $casts = [
            'customer-satisfaction-images' => 'array',
            'quality-images' => 'array',
            'integrity-images' => 'array',
        ];

    }
