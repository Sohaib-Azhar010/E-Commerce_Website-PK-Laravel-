<?php

use App\Http\Controllers\SignupController;
use App\Http\Controllers\SigninController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/accessories', function () {
    return view('accessories');
});
Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});
Route::post('/Signed',[SignupController::class,'insert'])->name('SignUp.insert');
Route::post('/Signed',[SigninController::class,'checkLogin'])->name('Signin.check');