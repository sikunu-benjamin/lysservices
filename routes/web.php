<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index'])->name('welcome.index');
Route::get('/about', [WelcomeController::class, 'about'])->name('welcome.about');
Route::get('/services', [WelcomeController::class, 'services'])->name('welcome.services');
Route::get('/processus', [WelcomeController::class, 'processus'])->name('welcome.processus');
Route::get('/contact', [WelcomeController::class, 'contact'])->name('welcome.contact');
