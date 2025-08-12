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