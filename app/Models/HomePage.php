<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
protected $fillable= [
 'name',
 'video_section_web',
'video_section_mobile',
'about_section_text',
'what_we_do_section_text',
'our_team_section_text',
'blogs_section_text',
'active',
'speed',
];

    public function scopeActive($query)
    {
        return $query->where('active',true);
    }

    public function images()
    {
        return $this->hasMany(HomePageImage::class, 'homepage_id');
    }


}
