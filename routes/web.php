<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::group(['prefix' => 'admin'], function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->middleware(['admin.auth:admin', 'verified'])->name('admin.dashboard');

    Route::middleware('admin.auth:admin')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('admin.profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('admin.profile.destroy');
    });

});

require __DIR__ . '/admin.php';

Route::group(['prefix' => 'institution'], function () {

    Route::get('/dashboard', function () {
        return view('institution.dashboard');
    })->middleware(['institution.auth:admin', 'verified'])->name('institution.dashboard');

    Route::middleware('institution.auth:admin')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('institution.profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('institution.profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('institution.profile.destroy');
    });

});

require __DIR__ . '/institution.php';
