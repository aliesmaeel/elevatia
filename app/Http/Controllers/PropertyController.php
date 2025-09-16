<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\OffPlanProject;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropertyController
{
    public function propertyDetails($slug)
    {
        // Fetch property details from the database using the slug
        $property = Property::where('slug', $slug)->firstOrFail();

        $similarListings = Property::where('id', '!=', $property->id)
            ->where('type', $property->type)
            ->inRandomOrder()
            ->take(3)
            ->get();

        $allImages_property = $property->propertyImages->pluck('image')->toArray();
        foreach ($allImages_property as $key => $image) {
            $allImages_property[$key] = asset('storage/' . $image);
        }

        return view('property.details', compact('property','similarListings','allImages_property'));
    }


    public function averagePrice($type)
    {
        $averages = Property::select(
            DB::raw('YEAR(created_at) as year'),
            DB::raw('MONTH(created_at) as month'),
            'type',
            DB::raw('AVG(price) as avg_price')
        )
            ->when($type, function ($query, $type) {
                return $query->where('type', $type);
            })
            ->groupBy('year', 'month', 'type')
            ->orderBy('year')
            ->orderBy('month')
            ->get();

        return response()->json($averages);
    }

    public function offplan()
    {
        $properties = OffPlanProject::all();

        return view('property.offplan', compact('properties'));
    }

    public function offplanDetails($slug)
    {
        $property = OffPlanProject::with('images')->where('slug',$slug)->first();

        $allImages_property = $property->images()->pluck('image_path')->toArray();

        foreach ($allImages_property as $key => $image) {
            $allImages_property[$key] = asset('storage/' . $image);
        }

        $agents=Agent::all();
        return view('property.offplan_details', compact('property','agents','allImages_property'));
    }

    public function allProperties()
    {
        $properties = Property::paginate(12);
        return view('property.index', compact('properties'));
    }
}
