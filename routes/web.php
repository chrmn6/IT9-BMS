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
