<?php

use Illuminate\Support\Facades\Route;

// 👇 Public route: Welcome page (always visible)
Route::get('/', function () {
    return view('welcome'); // <- your welcome.blade.php
})->name('welcome');

// 👇 Protected routes (only visible after login/register)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/activities', function () {
        return view('activities');
    })->name('activities');

    Route::get('/announcement', function () {
        return view('announcement');
    })->name('announcement');

    Route::get('/services', function () {
        return view('services');
    })->name('services');

    Route::get('/service-request', function () {
        return view('service-request');
    })->name('service-request');

    Route::get('/emergency', function () {
        return view('emergency');
    })->name('emergency');
});

// 👇 This includes Breeze’s auth routes (login, register, logout, etc.)
require __DIR__.'/auth.php';
