<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\RsvpController;

Route::get('/', [InvitationController::class, 'index'])
    ->name('invitation');

Route::post('/guest', [GuestController::class, 'store'])
    ->name('guest.store');

    Route::get('/rsvp', [RsvpController::class, 'index']);
Route::post('/rsvp', [RsvpController::class, 'store']);