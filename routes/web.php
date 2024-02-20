<?php

use App\Http\Controllers\SignupController;
use App\Http\Controllers\SigninController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckoutController;


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

Route::get('/checkout', [CheckoutController::class, 'showCheckoutPage']);
Route::post('/checkout_done', [CheckoutController::class, 'store'])->name('checkout.store');


Route::get('/success', function () {
    return view('success'); // You can replace 'success' with the actual view name or route logic.
})->name('success');





