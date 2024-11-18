<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\TreatmentController;

// LANDING PAGE & OTHER
Route::get('/Eternelle-Beauty', function () {
    return view('page.index');
});
Route::get('/membership', function () {
    return view('page.membership');
});
Route::get('/appointment', function () {
    return view('page.appointment');
});
// Route::get('about-us', function () {
//     return view('homepage.about-us');
// });
// Route::get('Promo', function () {
//     return view('homepage.promo');
// });

// Route::get('display-treatment', [TreatmentController::class, 'treatmentPage']);
// Route::get('display-product', [ProductController::class, 'productPage']);
// Route::get('show-product/{id}', [ProductController::class, 'show'])->name('showProduct');

// Route::post('save-appointment', [ReservationController::class, 'storeUser']);
// Route::get('add-appointment', [ReservationController::class, 'addAppointment'])->name('add-appointment');

// Route::post('save-membership', [MembershipController::class, 'storeUser']);
// Route::get('add-new-membership', [MembershipController::class, 'addNewMembership'])->name('add-new-membership');