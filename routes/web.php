<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('admin/dashboard');
});

Route::get('/kalender', function () {
    return view('admin/kalender');
});

Route::get('/booking', function () {
    return view('admin/booking');
});
