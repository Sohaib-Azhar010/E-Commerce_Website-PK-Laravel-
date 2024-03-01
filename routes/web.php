<?php

use App\Http\Controllers\SignupController;
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

Route::get('/clothing', function () {
    return view('clothing');
});

Route::get('/admin', function () {
    return view('Admin.admin_index');
});




Route::post('/Signed_Up',[SignupController::class,'storeSignUp'])->name('SignUp.insert');
Route::post('/Logged_In',[SignupController::class,'checkLogin'])->name('LogIn.insert');


Route::get('/checkout', [CheckoutController::class, 'showCheckoutPage'])->name('checkout');
Route::post('/checkout_done', [CheckoutController::class, 'store'])->name('checkout.store');


Route::get('/success', function () {
    return view('success'); // You can replace 'success' with the actual view name or route logic.
})->name('success');



Route::post('/session', [StripeController::class, 'createCheckoutSession'])->name('stripe.session');


Route::group(['middleware'=> ['UserDataMiddleware']], function () {
    Route::get('/hello',[SignUpController::class,'hello']);
});

Route::get('/productpage', [CheckoutController::class, 'showProductPage']);

Route::get('/admin', [CheckoutController::class, 'showOrdersPage']);

Route::get('/test', function () {
    dd(auth()->user());
});


