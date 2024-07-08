<?php

use App\Models\Booking;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Auth;
// Route::get('/admin', function () {
//     return view('admin/dashboard');
// })->name('admin.dashboard');



Route::get('/login-krebet', [AdminController::class, 'login'])->name('login');
Route::post('/login-proses-krebet', [AdminController::class, 'loginProses'])->name('admin.login.proses');
Route::get('/logout-krebet', [AdminController::class, 'logout'])->name('admin.logout');

Route::middleware(['auth'])->group(function () {
Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/laporan', [AdminController::class, 'laporan'])->name('admin.laporan');
Route::get('/laporan/search', [AdminController::class, 'laporanSearch'])->name('admin.laporan.search');



// Route::get('/admin/invoice', function () {
//     return view('tagihan/invoice');
// })->name('admin.invoice');
Route::get('/laporan/report', [PDFController::class, 'laporan'])->name('admin.laporan.print');
Route::get('/laporan/report/pdf', [PDFController::class, 'laporan_pdf'])->name('admin.laporan.pdf');

Route::get('/admin/invoice{id}', [PDFController::class, 'invoice'])->name('admin.invoice');
Route::get('/admin/invoice{id}?output=pdf', [PDFController::class, 'invoice'])->name('admin.invoice.pdf');

Route::get('/admin/kalender', [AdminController::class, 'index'])->name('admin.kalender');
Route::get('/admin-booking-proses', [AdminController::class, 'store'])->name('admin.bookingProses');

Route::get('/admin/booking',[AdminController::class, 'show'])->name('admin.booking');
Route::get('/admin/booking/search-pic',[AdminController::class, 'searchPIC'])->name('admin.booking.pic.search');
Route::get('/admin/detail/{id}',[AdminController::class, 'detail'])->name('admin.detail');
Route::get('/admin/edit/{id}',[AdminController::class, 'edit'])->name('admin.edit.booking');
Route::get('/admin/update/{id}',[AdminController::class, 'update'])->name('admin.bookingUpdate');
Route::get('/admin/delete/{id}',[AdminController::class, 'destroy'])->name('admin.booking.delete');
});
Route::get('/testing', function () {
    return view('calendar');
})->name('admin.test');

Route::get('/form', function () {
    return view('form');
})->name('admin.form');

Route::get('/', [LandingPageController::class,'index'])->name('user.landingpage');
Route::get('/booking/proses', [LandingPageController::class,'store'])->name('user.bookingProses');
