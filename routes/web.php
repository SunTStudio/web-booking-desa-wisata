<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InvoiceController;

// Route::get('/admin', function () {
//     return view('admin/dashboard');
// })->name('admin.dashboard');

Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/laporan', [AdminController::class, 'laporan'])->name('admin.laporan');
Route::get('/laporan/search', [AdminController::class, 'laporanSearch'])->name('admin.laporan.search');



// Route::get('/admin/invoice', function () {
//     return view('tagihan/invoice');
// })->name('admin.invoice');

Route::get('/admin/invoice{id}', [InvoiceController::class, 'pdf'])->name('admin.invoice');
Route::get('/admin/invoice{id}?output=pdf', [InvoiceController::class, 'pdf'])->name('admin.invoice.pdf');

Route::get('/admin/kalender', [AdminController::class, 'index'])->name('admin.kalender');
Route::get('/admin-booking-proses', [AdminController::class, 'store'])->name('admin.bookingProses');

Route::get('/admin/booking',[AdminController::class, 'show'])->name('admin.booking');
Route::get('/admin/detail/{id}',[AdminController::class, 'detail'])->name('admin.detail');

Route::get('/testing', function () {
    return view('calendar');
})->name('admin.test');

Route::get('/form', function () {
    return view('form');
})->name('admin.form');

Route::get('/', function () {
    return view('user/landingpage');
})->name('user.landingpage');
