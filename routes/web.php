<?php

use App\Models\BusinessCard;
use Illuminate\Support\Facades\Route;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

Route::get('/', function () {
    return view('Homepage');
})->name('home');

Route::get('/search_result', function () {
    return view('search_result');
})->name('search_result');

Route::get('/property_details', function () {
    return view('property_details');
})->name('property_details');

Route::get('/blogs', function () {
    return view('blogs');
})->name('blogs');

Route::get('/contact_us', function () {
    return view('contact_us');
})->name('contact_us');

Route::get('/about_us', function () {
    return view('about_us');
})->name('about_us');

Route::get('/details_blog', function () {
    return view('details_blog');
})->name('details_blog');

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

Route::get('/business-card/{businessCard}', function (BusinessCard $businessCard) {
    return view('business-card-public', compact('businessCard'));
})->name('business-card.show');


Route::get('/business-card/{businessCard}/qr', function (BusinessCard $businessCard) {
    $qr = QrCode::size(300)
        ->generate(route('business-card.show', $businessCard->id));

    return response($qr)
        ->header('Content-Type', 'image/svg+xml')
        ->header('Content-Disposition', 'attachment; filename="business-card-qr.svg"');
})->name('business-card.qr.download');

Route::get('/business-card/{businessCard}/vcard', function (BusinessCard $businessCard) {
    $vcard = "BEGIN:VCARD\n";
    $vcard .= "VERSION:3.0\n";
    $vcard .= "FN:{$businessCard->name}\n";
    $vcard .= "ORG:{$businessCard->company_name}\n";
    $vcard .= "TITLE:{$businessCard->job_title}\n";
    $vcard .= "TEL;TYPE=WORK,VOICE:{$businessCard->phone}\n";
    $vcard .= "EMAIL:{$businessCard->email}\n";
    $vcard .= "ADR;TYPE=WORK:;;{$businessCard->address};;;;\n";
    $vcard .= "URL:{$businessCard->url}\n";
    $vcard .= "END:VCARD";

    return response($vcard)
        ->header('Content-Type', 'text/vcard')
        ->header('Content-Disposition', "attachment; filename=\"{$businessCard->name}.vcf\"");
})->name('business-card.vcard');
