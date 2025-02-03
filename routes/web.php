<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/flights', [FlightsController::class, 'index'])->name('flightshome');
Route::get('/reservations/{flight_id}', [ReservationController::class, 'create'])->name('reservationscreate');
Route::post('/reservations/{flight_id}', [ReservationController::class, 'store'])->name('reservationsstore');