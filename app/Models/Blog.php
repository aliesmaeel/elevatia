<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable=[
            'title',
            'slug',
            'description',
            'agent_id',
            'likes',
            'shares',
            'social_links',
             'image'
    ];

    protected $casts = [
        'social_links' => 'array',
    ];

    public function agent(){
        return $this->belongsTo(Agent::class);
    }



}
