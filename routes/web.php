<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CoffeeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('auth.login');
});


Route::middleware('guest')->controller(AuthController::class)->group(function () {
    Route::get('/login', 'showLogin')->name('showLogin');
    Route::get('/register', 'showRegister')->name('showregister');
    Route::post('/login', 'login')->name('login');
    Route::post('/register', 'register')->name('register');
 
});


Route::middleware('auth')->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
     Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
     Route::resource('products', ProductController::class);
});