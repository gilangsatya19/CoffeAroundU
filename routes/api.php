<?php

use App\Http\Controllers\TokoAPI;
use App\Http\Controllers\LoginAPI;
use App\Http\Controllers\ProductAPI;
use App\Http\Controllers\TransactionAPI;
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

Route::get('/me', [UserAPI::class, 'me'])->middleware(['auth:sanctum']);

Route::post('/login', [LoginAPI::class, 'login']);
Route::get('/logout', [LoginAPI::class, 'logout'])->middleware(['auth:sanctum']);

Route::post('/register', [UserAPI::class, 'store']);

Route::get('/my_toko', [TokoAPI::class, 'index'])->middleware(['auth:sanctum']);
Route::post('/my_toko', [TokoAPI::class, 'store'])->middleware(['auth:sanctum']);
Route::post('/my_toko/{id}', [TokoAPI::class, 'update'])->middleware(['auth:sanctum']);
Route::post('/my_toko/{id}/destroy', [TokoAPI::class, 'destroy'])->middleware(['auth:sanctum']);

Route::get('/my_product', [ProductAPI::class, 'index'])->middleware(['auth:sanctum']);
Route::get('/my_product/{id}', [ProductAPI::class, 'show'])->middleware(['auth:sanctum']);
Route::post('/my_product', [ProductAPI::class, 'store'])->middleware(['auth:sanctum']);
Route::post('/my_product/{id}', [ProductAPI::class, 'update'])->middleware(['auth:sanctum']);
Route::post('/my_product/{id}/destroy', [ProductAPI::class, 'destroy'])->middleware(['auth:sanctum']);

Route::get('/transaction', [TransactionAPI::class, 'index'])->middleware(['auth:sanctum']);
Route::get('/transaction/{id}', [TransactionAPI::class, 'show'])->middleware(['auth:sanctum']);

// Route::get('/cek_session', [TokoAPI::class, 'cek_session'])->middleware(['auth:sanctum']);
