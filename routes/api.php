<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// route api login
Route::post('login', [App\Http\Controllers\API\AuthAPIController::class, 'login'])->name('login');

// route api jadwal
Route::middleware('auth:sanctum')->get('jadwal/{id}', [App\Http\Controllers\API\APIController::class, 'showAllJadwalByImam'])->name('jadwal');
Route::middleware('auth:sanctum')->put('jadwal/{id}/{id_jadwal}', [App\Http\Controllers\API\APIController::class, 'editStatusJadwalByImam'])->name('jadwal');