<?php

use App\Livewire\Browse;
use App\Livewire\Home;
use App\Livewire\Pricing;
use Illuminate\Support\Facades\Route;


Route::get('/', Home::class)->name('home');
Route::get('/browse', Browse::class)->name('browse');
Route::get('/pricing', Pricing::class)->name('pricing');

require __DIR__.'/auth.php';
