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

Route::middleware('guest')->group( function () {
    Route::get('/login', [App\Http\Controllers\AuthController::class, 'index']);
    Route::post('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
});

Route::middleware('auth')->group(function (){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
});
