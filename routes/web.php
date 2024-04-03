<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ApplicationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/services', function () {
    return view('services');
})->name('services');
Route::get('/rates', function () {
    return view('rates');
})->name('rates');
Route::get('/articles', function () {
    return view('articles');
})->name('articles');
Route::get('/cases', function () {
    return view('cases');
})->name('cases');
Route::get('/case', function () {
    return view('case');
})->name('case');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/applications', [ApplicationController::class, 'index'])->name('applications.index')
    ->middleware('can:view-applications');


require __DIR__.'/auth.php';
