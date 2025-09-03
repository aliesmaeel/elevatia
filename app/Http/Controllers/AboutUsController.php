<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Agent;
use App\Models\Seo;

class AboutUsController
{
    public function index()
    {
        $about=AboutUs::first();
        $agents=Agent::all();
        $seo=Seo::where('page_name','about')->first();
        return view('about.index',compact('about','agents','seo'));
    }
}
