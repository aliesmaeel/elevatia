<?php

namespace App\Http\Controllers;

use App\Models\ContactPage;

class ContactController
{
    public function index()
    {
        $contact=ContactPage::first();


        return view('contact.index',compact('contact'));
    }
}
