<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Agent;

class AboutUsController
{
    public function index()
    {
        $about=AboutUs::first();
        $agents=Agent::all();
        return view('about.index',compact('about','agents'));
    }
}
