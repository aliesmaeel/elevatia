<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Team;
use App\Models\Testimonials;

class TeamController
{
    public function index()
    {
        $agents=Agent::all();
        return view('agents.index',compact('agents'));
    }

    public function show($id)
    {
        $agent=Agent::findOrFail($id);
        $agents=Agent::all();
        $testimonials = Testimonials::all();
        return view('agents.show',compact('agent','agents','testimonials'));
    }
}
