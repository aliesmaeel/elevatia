<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Blog;
use App\Models\City;
use App\Models\Community;
use App\Models\HomePage;
use App\Models\Property;
use App\Models\SubCommunity;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $home=HomePage::first();
        $premiumProperties = Property::with(['agent','amenities'])
            ->where('is_premium', true)->paginate(12);
        $agents=Agent::all();
        if (!$home) {
          return 'No home page data found.';
        }

        $blogs=Blog::with('agent')->limit(7)->get();


        return view('home',compact('home',
            'premiumProperties',
            'blogs',
            'agents'));
    }

    public function search(Request $request)
    {

        $query = Property::query();

        if ($request->filled('search')) {
            $query->where(function($q) use ($request) {
                $q->where('title', 'LIKE', '%'.$request->search.'%')
                    ->orWhere('description', 'LIKE', '%'.$request->search.'%')
                    ->orWhere('address', 'LIKE', '%'.$request->search.'%');
            });
        }

        if ($request->filled('property_type') && $request->property_type !== 'any') {
            $query->where('type', $request->property_type);
        }

        if ($request->filled('bathrooms') && $request->bathrooms !== 'any') {
            $query->where('bathrooms', $request->bathrooms);
        }

        if ($request->filled('bedrooms') && $request->bedrooms !== 'any') {
            $query->where('bedrooms', $request->bedrooms);
        }

        if ($request->filled('min_price')) {
            $query->where('price', '>=', (int) $request->min_price);
        }
        if ($request->filled('max_price')) {
            $query->where('price', '<=', (int) $request->max_price);
        }

        $properties = $query->paginate(12); // with pagination


        return view('search_result', compact('properties'));
    }
}
