<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
Route::get('/members', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
*/

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/members', [MemberController::class, 'show'])->name('apimembersshow');
    Route::get('/flights', [FlightController::class, 'index'])->name('apiflightshome');
    Route::post('/reservations', [ReservationController::class, 'store'])->name('apireservationsstore');
    Route::delete('/reservations/{reservation_id}', [ReservationController::class, 'destroy'])->name('apireservationsdestroy');
});