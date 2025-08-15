<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Homepage');
});
Route::get('/search_result', function () {
    return view('search_result');
});
Route::get('/property_details', function () {
    return view('property_details');
});
Route::get('/blogs', function () {
    return view('blogs');
});

Route::get('/contact_us', function () {
    return view('contact_us');
});
Route::get('/about_us', function () {
    return view('about_us');
});
Route::get('/details_blog', function () {
    return view('details_blog');
});