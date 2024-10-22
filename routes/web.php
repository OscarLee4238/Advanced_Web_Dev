<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PhoneController;


Route::get('/phone', [PhoneController::class, 'index'])->name('phone.index');
Route::get('/phone/{phone}', [PhoneController::class, 'show'])->name('phones.show');
Route::get('/phone/create', [PhoneController::class, 'create'])->name('phone.create');
Route::post('/phone', [PhoneController::class, 'store'])->name('phone.store');
Route::get('/phone/{phone}', [PhoneController::class, 'show'])->name('phone.show');
Route::get('/phone/{phone}/edit', [PhoneController::class, 'edit'])->name('phone.edit');
Route::get('/phone/{phone}', [PhoneController::class, 'update'])->name('phone.update');
Route::get('/phone/{phone}', [PhoneController::class, 'destroy'])->name('phone.destroy');

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

require __DIR__.'/auth.php';

