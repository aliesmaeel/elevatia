<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BrochureController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DownloadedBrochureController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\TeamController;
use App\Models\BusinessCard;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

Route::get('/', [HomePageController::class,'index'])->name('home');
Route::get('/search', [HomePageController::class, 'search'])->name('property.search');
Route::post('/submit',[HomePageController::class,'submit'])->name('form.submit');

Route::get('/blogs',[BlogController::class,'index'])->name('blogs.index');
Route::get('/blog/{slug}',[BlogController::class,'show'])->name('blogs.details');
Route::post('/blog/{id}/like', [BlogController::class, 'like']);
Route::post('/blog/{id}/share', [BlogController::class, 'share']);
Route::get('/contact',[ContactController::class,'index'])->name('contact.index');
Route::get('/about',[AboutUsController::class,'index'])->name('about.index');
Route::get('/team',[TeamController::class,'index'])->name('agents.index');
Route::get('/team/{id}',[TeamController::class,'show'])->name('agents.show');

Route::get('/all-properties', [PropertyController::class, 'allProperties'])->name('property.all');
Route::get('/property/{slug}', [PropertyController::class, 'propertyDetails'])->name('property.details');
Route::get('/average-prices/{type}', [PropertyController::class, 'averagePrice']);

Route::get('/offplan',[PropertyController::class,'offplan'])->name('offplan.index');
Route::get('/offplan/{slug}',[PropertyController::class,'offplanDetails'])->name('offplan.details');

Route::post('/downloaded-brochure', [BrochureController::class, 'store'])
    ->name('downloaded-brochure.store');

Route::get('/privacy-policy', function () {
    return view('privacy_policy');
})->name('privacy_policy');

Route::get('/property_details', function () {
    return view('property_details');
})->name('property_details');
