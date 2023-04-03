<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TokoController;
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

Route::get('/', function () {
    return view('coffee.index');
});

Route::get('/sign-in', function () {
    return view('coffee.signIn');
});

Route::get('/sign-up', function () {
    return view('coffee.signUp');
});
Route::get('/register', function () {
    return view('coffee.register');
});
Route::get('/edit', function () {
    return view('coffee.editProduct');
});

Route::resource('/home/my_toko', TokoController::class);

Route::resource('home/my_products', ProductController::class);