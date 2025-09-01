<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $fillable = [
        'email',
        'type',
        'phone',
        'name',
        'message',
        'time',
        'date',
        'property_type',
        'is_read'
    ];


}
