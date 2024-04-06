<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// comment auth default dibawah
// Auth::routes();

Route::get('login',[AuthController::class,'index'])->name('login');
Route::get('register',[AuthController::class,'register'])->name('register');
Route::get('dashboard',[AuthController::class,'dashboard'])->name('dashboard');

Route::post('proses_login',[AuthController::class,'proses_login'])->name('proses.login');
Route::post('proses_register',[AuthController::class,'proses_register'])->name('proses.register');

Route::post('logout',[AuthController::class,'logout'])->name('logout');

// ini di komen juga
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
