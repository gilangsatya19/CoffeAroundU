<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\UserController;
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

Route::get('/index', function () {
    return view('coffee.index');
});

// Route::get('/coffee/index', [UserController::class, 'create'])->name('create.obat');
Route::get('/coffee/sign-up', [UserController::class, 'create'])->name('create.user');
Route::post('/coffee/store', [UserController::class, 'store'])->name('store.user');
Route::get('/coffee/main/home', [UserController::class, 'index'])->name('home.user');


Route::resource('/home/my_toko', TokoController::class);

Route::resource('home/my_products', ProductController::class);
