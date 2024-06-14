<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/landingpage', [LandingPageController::class, 'index'])->name('wisata.landingpage');

