<?php

use App\Http\Controllers\SignupController;
use App\Http\Controllers\SigninController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\StripeController;

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

Route::post('/Signed_Up',[SignupController::class,'storeSignUp'])->name('SignUp.insert');
Route::post('/Logged_In',[SignupController::class,'checkLogin'])->name('LogIn.insert');


Route::get('/checkout', [CheckoutController::class, 'showCheckoutPage'])->name('checkout');
Route::post('/checkout_done', [CheckoutController::class, 'store'])->name('checkout.store');


Route::get('/success', function () {
    return view('success'); // You can replace 'success' with the actual view name or route logic.
})->name('success');



Route::post('/session', [StripeController::class, 'session'])->name('stripe.session');

Route::group(['middleware'=> ['authChk']], function () {
    Route::get('/hello',[SignUpController::class,'hello']);
});

