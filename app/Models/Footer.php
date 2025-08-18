<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    protected $fillable=['image','text','links','copy_write','active'];

    protected $casts = [
        'links' => 'array',
    ];

    public function scopeActive($query)
    {
        return $query->where('active',true);
    }


}
