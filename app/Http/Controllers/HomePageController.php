<?php

namespace App\Http\Controllers;

use App\Models\HomePage;
use App\Models\Property;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $home=HomePage::first();
        $premiumProperties = Property::
        with(['agent','amenities'])
            ->where('is_premium', true)->paginate(6);

        if (!$home) {
          return 'No home page data found.';
        }


        return view('home',compact('home','premiumProperties'));
    }
}
