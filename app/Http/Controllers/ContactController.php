<?php

namespace App\Http\Controllers;

use App\Models\ContactPage;
use App\Models\Seo;

class ContactController
{
    public function index()
    {
        $contact=ContactPage::first();
        $seo=Seo::where('page_name','contact')->first();

        return view('contact.index',compact('contact','seo'));
    }
}
