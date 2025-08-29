<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class BlogController
{
    public function index()
    {
        $blogs=Blog::with('agent')->get();

        return view('blogs.index',compact('blogs'));
    }

    public function show($slug)
    {
        $blog=Blog::with('agent')->where('slug',$slug)->firstOrFail();

        return view('blogs.show',compact('blog'));
    }

    public function like($id) {
        $blog = Blog::findOrFail($id);
        $blog->likes += 1;
        $blog->save();

        return response()->json(['likes' => $blog->likes]);
    }

    public function share($id) {
        $blog = Blog::findOrFail($id);
        $blog->shares += 1;
        $blog->save();

        return response()->json(['shares' => $blog->shares]);
    }


}
