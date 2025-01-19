<?php

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('email/verify', function () {
   return view('auth.verify');
})->middleware('auth')->name('verification.notice');

Route::get('email/verify/{id}/{hash}', [\App\Http\Controllers\Auth\VerificationController::class, 'verify'])->name('verification.verify');
Route::post('email/verify/{id}/{hash}', [\App\Http\Controllers\Auth\VerificationController::class, 'resend'])->name('verification.verify');
