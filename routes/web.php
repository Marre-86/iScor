<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ApplicationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');
Route::get('/services', function () {
    return view('services');
})->middleware(['auth', 'verified'])->name('services');
Route::get('/rates', function () {
    return view('rates');
})->middleware(['auth', 'verified'])->name('rates');
Route::get('/articles', function () {
    return view('articles');
})->middleware(['auth', 'verified'])->name('articles');
Route::get('/cases', function () {
    return view('cases');
})->middleware(['auth', 'verified'])->name('cases');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/applications', function () {
    return view('applications');
})->name('applications');

Route::get('/applications', [ApplicationController::class, 'index'])->name('applications.index')
    ->middleware('can:view-applications');


require __DIR__.'/auth.php';
