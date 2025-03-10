<?php

use App\Livewire\Browse;
use App\Livewire\Home;
use App\Livewire\Pricing;
use Illuminate\Support\Facades\Route;


Route::get('/', Home::class)->name('home');
Route::get('/browse', Browse::class)->name('browse');
Route::get('/pricing', Pricing::class)->name('pricing');

// Add authentication routes
Route::middleware('guest')->group(function () {
    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');

    Route::get('/register', function () {
        return view('auth.register');
    })->name('register');
});

// Placeholder routes for the links in the footer
Route::get('/contributor', function () {
    return view('pages.contributor');
})->name('contributor');
Route::get('/terms', function () {
    return view('pages.terms');
})->name('terms');
Route::get('/privacy', function () {
    return view('pages.privacy');
})->name('privacy');
Route::get('/pricing/individual', function () {
    return view('pages.pricing.individual');
})->name('pricing.individual');
Route::get('/pricing/company', function () {
    return view('pages.pricing.company');
})->name('pricing.company');
Route::get('/subscriptions', function () {
    return view('pages.subscriptions');
})->name('subscriptions');
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
Route::get('/faq', function () {
    return view('pages.faq');
})->name('faq');

require __DIR__.'/auth.php';
