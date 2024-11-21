<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\TreatmentController;

// LANDING PAGE & OTHER
Route::get('/', function () {
    return view('page.index');
});
Route::get('/promo', function () {
    return view('page.promo');
});
Route::get('/about-us', function () {
    return view('page.about-us');
});
Route::get('/blank', function () {
    return view('inside-page.blank');
});

Route::get('/show-product/{id}', [ProductController::class, 'show'])->name('showProduct');
Route::resource('/products', ProductController::class);
Route::resource('/treatments', TreatmentController::class);
Route::resource('/reservations', ReservationController::class);
Route::resource('/memberships', MembershipController::class);