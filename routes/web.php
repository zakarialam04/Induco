<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteController;


Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/feature', function () {
    return view('feature');
});

Route::get('/quote', function () {
    return view('quote');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/testimonial', function () {
    return view('testimonial');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/404', function () {
    return view('404');
});



Route::post('/quote', [QuoteController::class, 'store'])->name('quote.store');
