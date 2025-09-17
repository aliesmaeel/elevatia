<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Blog;
use App\Models\City;
use App\Models\Community;
use App\Models\Email;
use App\Models\HomePage;
use App\Models\OffPlanProject;
use App\Models\Property;
use App\Models\Seo;
use App\Models\SubCommunity;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        $home=HomePage::first();
        $premiumProperties = Property::with(['agent','amenities'])
            ->where('is_premium', true)->paginate(3);
        $agents=Agent::all();
        if (!$home) {
          return 'No home page data found.';
        }

        $blogs=Blog::with('agent')->limit(7)->get();
        $off_plan=OffPlanProject::get()->take(6);

        $seo=Seo::where('page_name','home')->first();

        return view('home',compact('home',
            'premiumProperties',
            'blogs',
            'seo',
            'off_plan',
            'agents'));
    }

    public function search(Request $request)
    {
        $query = Property::query();

        if ($request->filled('property_type')) {

            $types = (array) $request->property_type;

            if (!in_array('any', $types)) {
                $query->where(function ($q) use ($types) {
                    $q->whereHas('city', function ($sub) use ($types) {
                        $sub->whereIn('name', $types);
                    })
                        ->orWhereHas('community', function ($sub) use ($types) {
                            $sub->whereIn('name', $types);
                        })
                        ->orWhereHas('subCommunity', function ($sub) use ($types) {
                            $sub->whereIn('name', $types);
                        });
                });

            }
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

        $properties = $query->paginate(12);

        return view('search_result', compact('properties'));
    }

    public function submit(Request $request)
    {

        $email=Email::create([
            'email'=>$request->email,
            'type'=>$request->type,
            'name'=>$request->name ?? null,
            'phone'=>$request->phone ?? null,
            'message'=>$request->message ?? null,
            'time'=>$request->time ?? null,
            'date'=>$request->date ?? null,
            'property_type'=>$request->property_type ?? null,
        ]);

        return redirect()->back()->with('success','Your email has been submitted successfully.');
    }

}
