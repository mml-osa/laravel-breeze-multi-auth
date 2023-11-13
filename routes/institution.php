<?php

use App\Http\Controllers\University\Auth\AuthenticatedSessionController;
use App\Http\Controllers\University\Auth\ConfirmablePasswordController;
use App\Http\Controllers\University\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\University\Auth\EmailVerificationPromptController;
use App\Http\Controllers\University\Auth\NewPasswordController;
use App\Http\Controllers\University\Auth\PasswordController;
use App\Http\Controllers\University\Auth\PasswordResetLinkController;
use App\Http\Controllers\University\Auth\RegisteredUserController;
use App\Http\Controllers\University\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'university'], function () {

    Route::middleware('guest:university')->group(function () {
        Route::get('/register', [RegisteredUserController::class, 'create'])->name('university.register');
        Route::post('/register', [RegisteredUserController::class, 'store']);
        Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('university.login');
        Route::get('/', function () {return redirect()->route('university.login');});
        Route::post('/login', [AuthenticatedSessionController::class, 'store']);
        Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])->name('university.password.request');
        Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])->name('university.password.email');
        Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])->name('university.password.reset');
        Route::post('/reset-password', [NewPasswordController::class, 'store'])->name('university.password.store');
    });

    Route::middleware('university.auth:admin')->group(function () {
        Route::get('/verify-email', EmailVerificationPromptController::class)->name('university.verification.notice');
        Route::get('/verify-email/{id}/{hash}', VerifyEmailController::class)->middleware(['signed', 'throttle:6,1'])->name('university.verification.verify');
        Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])->middleware('throttle:6,1')->name('university.verification.send');
        Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])->name('university.password.confirm');
        Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store']);
        Route::put('/password', [PasswordController::class, 'update'])->name('university.password.update');
        Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('university.logout');
        Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('university.logout');
    });

});
