<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaymentController;

Route::get('/', [HomeController::class, 'index'])->name('home');

//Product pages
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/shortBy/{shortBy}', [ProductController::class, 'shortBy'])->name('products.shortBy');
Route::get('/products/detail/{product}', [ProductController::class, 'detail'])->name('products.detail');
Route::get('/products/search', [ProductController::class, 'search'])->name('products.search');

//about page
Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index'])->name('about');

//Contact page
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact');

//Login and Register page
Route::get('/login', [LoginController::class, 'index'])->name('auth.login');
Route::post('/auth/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/auth/register', [LoginController::class, 'store'])->name('register.authenticate');

//Route for cart
Route::middleware('auth')->group(function () {
//    route cart
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/addToCart', [CartController::class, 'addToCart'])->name('cart.addToCart');
    Route::get('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
    Route::post('/cart/updateQuantity', [CartController::class, 'updateQuantity'])->name('cart.updateQuantity');
    Route::post('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
    Route::post('/cart/checkout/addOrderDetail', [CartController::class, 'createOrderDetail'])->name('cart.createOrderDetail');

//    route transaction
    Route::get('/payment', [PaymentController::class, 'createCharge'])->name('payment.createCharge');
    Route::post('/create/snap-token', [PaymentController::class, 'createSnapToken']);
    Route::get('/payment/sandbox', [PaymentController::class, 'index'])->name('transaction.testing.sandbox');

//Route user
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/user/orders', [UserController::class, 'getOrderByUserId'])->name('user.orders');
    Route::post('/user/createOrderDetail', [UserController::class, 'createOrderDetail'])->name('user.createOrderDetail');
    Route::post('/user/order/cancel/{orderCode}', [UserController::class, 'cancelOrder'])->name('user.cancelOrderByOrderCode');

});



