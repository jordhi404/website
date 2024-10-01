<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\pageController;

Route::get('/', [pageController::class, 'landing'])->name('landing');
Route::get('/home', [pageController::class, 'home'])->name('home');
