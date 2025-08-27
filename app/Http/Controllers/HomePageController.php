<?php

namespace App\Http\Controllers;

use App\Models\HomePage;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $home=HomePage::where('active',1)->first();

        return view('home',compact('home'));
    }
}
