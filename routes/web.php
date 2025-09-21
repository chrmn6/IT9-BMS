<?php

use Illuminate\Support\Facades\Route;

// 👇 Public route: Welcome page (always visible)
Route::get('/', function () {
    return view('welcome'); // <- your welcome.blade.php
})->name('welcome');

// 👇 Protected routes (only visible after login/register)
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

// 👇 This includes Breeze’s auth routes (login, register, logout, etc.)
require __DIR__.'/auth.php';
