<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('userdb.dashboard');
    })->name('dashboard');

    Route::get('/activities', function () {
        return view('userdb.activities');
    })->name('activities');

    Route::get('/announcement', function () {
        return view('userdb.announcement');
    })->name('announcement');

    Route::get('/services', function () {
        return view('userdb.services');
    })->name('services');

    Route::get('/service-request', function () {
        return view('userdb.service-request');
    })->name('service-request');

    Route::get('/emergency', function () {
        return view('userdb.emergency');
    })->name('emergency');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
