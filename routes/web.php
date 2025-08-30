<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomePageController;
use App\Models\BusinessCard;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

Route::get('/', [HomePageController::class,'index'])->name('home');

Route::get('/search_result', function () {
    return view('search_result');
})->name('search_result');

Route::get('/property_details', function () {
    return view('property_details');
})->name('property_details');

Route::get('/blogs',[BlogController::class,'index'])->name('blogs.index');
Route::get('/blog/{slug}',[BlogController::class,'show'])->name('blogs.details');
Route::post('/blog/{id}/like', [BlogController::class, 'like']);
Route::post('/blog/{id}/share', [BlogController::class, 'share']);

Route::get('/contact',[ContactController::class,'index'])->name('contact.index');

Route::get('/about_us', function () {
    return view('about_us');
})->name('about_us');



Route::get('/our_team', function () {
    return view('our_team');
})->name('our_team');

Route::get('/offplan', function () {
    return view('offplan');
})->name('offplan');

Route::get('/team_details', function () {
    return view('team_details');
})->name('team_details');

Route::get('/offplan_details', function () {
    return view('offplan_details');
})->name('offplan_details');


