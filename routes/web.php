<?php

use App\Livewire\Browse;
use App\Livewire\Home;
use App\Livewire\Pricing;
use Illuminate\Support\Facades\Route;


Route::get('/', Home::class)->name('home');
Route::get('/browse', Browse::class)->name('browse');
Route::get('/pricing', Pricing::class)->name('pricing');


Route::get('/contributor', function () {
    return view('pages.contributor');
})->name('contributor');

Route::get('/pricing/company', function () {
    return view('pages.pricing.company');
})->name('pricing.company');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');


require __DIR__.'/auth.php';
