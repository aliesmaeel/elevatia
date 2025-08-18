<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'search_image',
        'popup_image',
        'popup_text',
        'popup_heading',
    ];
}
