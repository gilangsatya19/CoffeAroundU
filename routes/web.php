<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TokoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ForgotpasswordController;
use App\Http\Controllers\NewpasswordController;
use App\Http\Controllers\TransactionController;
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
Route::get('/about', function () {
    return view('coffee.about');
});

// Route::get('/coffee/index', [UserController::class, 'create'])->name('create.obat');
// Route::get('/home/sign-up', [UserController::class, 'create'])->name('create.user');
// Route::post('/home/store', [UserController::class, 'store'])->name('store.user');
// Route::get('/home/main/home', [UserController::class, 'index'])->name('home.user');

Route::resource('/new_password', NewpasswordController::class);

Route::resource('/forgot_password', ForgotpasswordController::class);

// Route::resource('/login', LoginController::class);
Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::resource('/home', UserController::class);


Route::resource('/my_toko', TokoController::class);

Route::resource('/my_products', ProductController::class);

Route::resource('/transaction', TransactionController::class);

// SEMENTARA
Route::get('/edit_product', function() {
    return view('coffee.editProduct');
});

Route::get('home/my-profile', function() {
    return view('coffee.profile');
});

Route::get('popup', function() {
    return view('coffee.pop');
});

Route::get('home/main/add-coffee', function() {
    return view('coffee.main.registerCoffee');
});

Route::get('detail', function() {
    return view('coffee.detail');
});



Route::get('details', function() {
    return view('coffee.main.orderDetails');
});

