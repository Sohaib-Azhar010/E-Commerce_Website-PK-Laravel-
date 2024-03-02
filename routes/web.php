<?php

use App\Http\Controllers\SignupController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('index');
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


Route::get('/product_manage', function () {
    return view('Admin.admin_product');
})->name('pm');

Route::get('/accounts', function () {
    return view('Admin.accounts');
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

Route::post('/products', [ProductController::class, 'store'])->name('products.store');
// routes/web.php or routes/api.php

// Route::delete('/products/{id}', 'ProductController@destroy')->name('products.destroy');
// routes/web.php
Route::delete('/products/{id}', [ProductController::class,'destroy'])->name('products.destroy');



Route::get('/inventory', [ProductController::class, 'index'])->name('Admin.inventory');

Route::post('/add-to-page/{productId}', [ProductController::class, 'addToPage'])->name('addToPage');

Route::get('/accessories', [ProductController::class, 'showAccessoriesPage'])->name('item.topage');
Route::get('/clothing', [ProductController::class, 'showClothingPage'])->name('item.topage');