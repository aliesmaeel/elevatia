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
    // Split name into first & last for iOS compatibility
    $nameParts = explode(' ', $businessCard->name, 2);
    $firstName = $nameParts[0] ?? '';
    $lastName  = $nameParts[1] ?? '';

    // Build vCard with proper CRLF line endings
    $vcard  = "BEGIN:VCARD\r\n";
    $vcard .= "VERSION:3.0\r\n";
    $vcard .= "N:{$lastName};{$firstName};;;\r\n";     // Structured name (required by iOS)
    $vcard .= "FN:{$businessCard->name}\r\n";          // Formatted full name
    $vcard .= "ORG:{$businessCard->company_name}\r\n";
    $vcard .= "TITLE:{$businessCard->job_title}\r\n";
    $vcard .= "TEL;TYPE=CELL:{$businessCard->phone}\r\n"; // CELL works best for iOS/Android
    $vcard .= "EMAIL:{$businessCard->email}\r\n";
    $vcard .= "ADR;TYPE=WORK:;;{$businessCard->address};;;;\r\n";
    $vcard .= "URL:{$businessCard->url}\r\n";
    $vcard .= "END:VCARD\r\n";

    $fileName = \Illuminate\Support\Str::slug($businessCard->name) . ".vcf";

    return response($vcard)
        ->header('Content-Type', 'text/vcard; charset=utf-8')
        ->header('Content-Disposition', "inline; filename=\"{$fileName}\"");
})->name('business-card.vcard');
