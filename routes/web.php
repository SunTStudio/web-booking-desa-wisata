<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('admin/dashboard');
})->name('admin.dashboard');

Route::get('/kalender', function () {
    return view('admin/kalender');
})->name('admin.kalender');

Route::get('/booking', function () {
    return view('admin/booking');
})->name('admin.booking');

Route::get('/testing', function () {
    return view('calendar');
})->name('admin.test');