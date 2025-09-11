<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OffPlanImages extends Model
{
    protected $fillable = ['off_plan_project_id', 'image_path'];

    public function offPlanProject()
    {
        return $this->belongsTo(OffPlanProject::class);
    }

}
