<?php

namespace App\Http\Controllers;

use App\Models\Brochure;
use Illuminate\Http\Request;

class BrochureController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        $brochureData = $request->only(['name', 'email', 'phone']);
        Brochure::create($brochureData);
        return response()->json(true);
    }
}
