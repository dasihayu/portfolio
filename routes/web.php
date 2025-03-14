<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/projects', [HomeController::class, 'projects']);
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', [ContactController::class, 'show'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
