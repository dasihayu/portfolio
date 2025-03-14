<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/projects', [HomeController::class, 'projects']);
Route::get('/about', function () {
    return view('about');
});
