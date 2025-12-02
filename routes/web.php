<?php


// routes/web.php
use App\Http\Controllers\BrwanController;
use Illuminate\Support\Facades\Route;


Route::get('/', [BrwanController::class, 'index'])->name('home');
Route::get('/about-us', [BrwanController::class, 'aboutUs'])->name('about.us');
Route::get('/our-work', [BrwanController::class, 'ourWork'])->name('our.work');
Route::get('/about-me', [BrwanController::class, 'aboutMe'])->name('about.me');
Route::get('/contact', [BrwanController::class, 'contact'])->name('contact');