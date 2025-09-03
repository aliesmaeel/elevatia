<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Seo extends Model
{
    protected $fillable = ['meta_title', 'meta_description', 'meta_keywords', 'page_name'];

    protected $casts = [
        'meta_keywords' => 'array',
    ];




}
