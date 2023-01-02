<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'welcome')->name('welcome');
Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');

Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('auth.login');
Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('auth.register');

Route::middleware(['auth'])->group(function () {
    Route::view('/home','admin.home')->name('home');
    Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('auth.logout');
});


