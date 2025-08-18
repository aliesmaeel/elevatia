<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomePageImage extends Model
{
    protected $table='home_page_images';

    protected $fillable=['url','homepage_id'];

    public function homePage()
    {
        return $this->belongsTo(HomePage::class, 'homepage_id');
    }

}
