<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InvoiceController;

Route::get('/admin', function () {
    return view('admin/dashboard');
})->name('admin.dashboard');

Route::get('/admin/invoice', function () {
    return view('tagihan/invoice');
})->name('admin.invoice');

Route::get('/kalender', [AdminController::class, 'index'])->name('admin.kalender');
Route::get('/admin/invoice_pdf', [InvoiceController::class, 'pdf'])->name('admin.invoice.pdf');

Route::get('/booking', function () {
    return view('admin/booking');
})->name('admin.booking');

Route::get('/testing', function () {
    return view('calendar');
})->name('admin.test');

Route::get('/form', function () {
    return view('form');
})->name('admin.form');

Route::get('/', function () {
    return view('user/landingpage');
})->name('user.landingpage');
