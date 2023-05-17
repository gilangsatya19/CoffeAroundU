<?php

use App\Http\Controllers\TokoAPI;
use App\Http\Controllers\LoginAPI;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAPI;

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

Route::get('/tes', [UserAPI::class, 'tes']);

Route::post('/login', [LoginAPI::class, 'login']);

Route::post('/register', [UserAPI::class, 'store'])->middleware(['auth:sanctum']);
Route::get('/my_toko', [TokoAPI::class, 'index'])->middleware(['auth:sanctum']);
Route::post('/my_toko', [TokoAPI::class, 'store'])->middleware(['auth:sanctum']);

// Route::get('/cek_session', [TokoAPI::class, 'cek_session'])->middleware(['auth:sanctum']);
