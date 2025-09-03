<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Seo;

class BlogController
{
    public function index()
    {
        $blogs=Blog::with('agent')->get();
        $seo=Seo::where('page_name','blogs')->first();
        return view('blogs.index',compact('blogs','seo'));
    }

    public function show($slug)
    {
        $blog=Blog::with('agent')->where('slug',$slug)->firstOrFail();
        $relatedBlogs=Blog::where('id','!=',$blog->id)->inRandomOrder()->take(3)->get();
        return view('blogs.show',compact('blog','relatedBlogs'));
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
