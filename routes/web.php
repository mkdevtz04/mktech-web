<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('/services/it', 'services.it')->name('services.it');
Route::view('/services/graphics', 'services.graphics')->name('services.graphics');
Route::view('/services/web', 'services.web')->name('services.web');
Route::view('/services/mobile', 'services.mobile')->name('services.mobile');
Route::view('/services/cctv', 'services.cctv')->name('services.cctv');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
