<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Blog;
use App\Models\HomePage;
use App\Models\Property;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $home=HomePage::first();
        $premiumProperties = Property::with(['agent','amenities'])
            ->where('is_premium', true)->paginate(6);
        $agents=Agent::all();
        if (!$home) {
          return 'No home page data found.';
        }

        $blogs=Blog::with('agent')->limit(7)->get();


        return view('home',compact('home','premiumProperties','blogs','agents'));
    }
}
