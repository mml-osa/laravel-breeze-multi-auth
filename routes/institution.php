<?php

use App\Http\Controllers\Institution\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Institution\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Institution\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Institution\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Institution\Auth\NewPasswordController;
use App\Http\Controllers\Institution\Auth\PasswordController;
use App\Http\Controllers\Institution\Auth\PasswordResetLinkController;
use App\Http\Controllers\Institution\Auth\RegisteredUserController;
use App\Http\Controllers\Institution\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'institution'], function () {

    Route::middleware('guest:institution')->group(function () {
        Route::get('/register', [RegisteredUserController::class, 'create'])->name('institution.register');
        Route::post('/register', [RegisteredUserController::class, 'store']);
        Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('institution.login');
        Route::get('/', function () {return redirect()->route('institution.login');});
        Route::post('/login', [AuthenticatedSessionController::class, 'store']);
        Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])->name('institution.password.request');
        Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])->name('institution.password.email');
        Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])->name('institution.password.reset');
        Route::post('/reset-password', [NewPasswordController::class, 'store'])->name('institution.password.store');
    });

    Route::middleware('institution.auth:admin')->group(function () {
        Route::get('/verify-email', EmailVerificationPromptController::class)->name('institution.verification.notice');
        Route::get('/verify-email/{id}/{hash}', VerifyEmailController::class)->middleware(['signed', 'throttle:6,1'])->name('institution.verification.verify');
        Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])->middleware('throttle:6,1')->name('institution.verification.send');
        Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])->name('institution.password.confirm');
        Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store']);
        Route::put('/password', [PasswordController::class, 'update'])->name('institution.password.update');
        Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('institution.logout');
        Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('institution.logout');
    });

});
