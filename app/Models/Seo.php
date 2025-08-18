<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    protected $fillable = ['meta_title', 'meta_description', 'meta_keywords', 'page_name'];

    protected $casts = [
        'meta_keywords' => 'array', // Cast meta_keywords as an array
    ];

}
