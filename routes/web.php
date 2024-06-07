<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\UserController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

// routes/web.php
Route::get('/about', function () {
    return view('about');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
     Route::resource(
         'product-category',
         \App\Http\Controllers\ProductCategoryController::class
     );

    Route::resource(
        'user',
        \App\Http\Controllers\UserController::class
    );
});

//shop
Route::GET('/product', 'App\Http\Controllers\ProductController@index');


Route::get('/', function () {
    return view('home');
});

// Route::get('product', function () {
//     return view('product');
// });



// Route::get('/admin', function () {
//     return view('admin.home');
// });
Route::get('/admin', 'App\Http\Controllers\DashboardController@view');

Route::GET('/store', 'App\Http\Controllers\ProductController@create');
Route::POST('/store', 'App\Http\Controllers\ProductController@create');

Route::get('/creste', function () {
    return view('admin.product.create');
});

Route::GET('more/{id}', 'App\Http\Controllers\ProductController@show');



Route::GET('cartt', 'App\Http\Controllers\CartController@showw');



// web.php
Route::get('/checkoutt', [StripeController::class, 'index'])->name('checkoutt');





Route::post('/save-order', [OrderController::class, 'saveOrder'])->name('save-order');



Route::middleware('auth')->group(function () {
    Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
});

Route::get('payment/{id}/{total}', [StripeController::class, 'session'])->name('stripe.payment');
Route::get('success', [StripeController::class, 'success'])->name('success');
Route::get('checkout', [StripeController::class, 'checkout'])->name('checkout');





Route::GET('/store', 'App\Http\Controllers\ProductController@create');
Route::POST('/store', 'App\Http\Controllers\ProductController@create');


// web.php
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');

Route::post('/save-order', [OrderController::class, 'saveOrder'])->name('save-order');

Route::GET('edit/{id}', 'App\Http\Controllers\ProductController@edit');

Route::put('update/{id}', 'App\Http\Controllers\ProductController@update');


//delete
Route::delete('destroy/{id}', 'App\Http\Controllers\ProductController@destroy');
Route::GET('creste', 'App\Http\Controllers\ProductController@viewproducts');

Route::GET('/edee', 'App\Http\Controllers\ProductController@editsave');
Route::POST('/edee', 'App\Http\Controllers\ProductController@editsave');

Route::GET('/create', 'App\Http\Controllers\ProductController@ccc');
//orders
Route::get('orders', 'App\Http\Controllers\OrderController@index');
    Route::get('view-orderadmion/{id}', 'App\Http\Controllers\OrderController@viewOrder');
    Route::get('orderadmion/{id}', 'App\Http\Controllers\OrderController@viewOrder');
    Route::put('order-update/{id}', 'App\Http\Controllers\OrderController@update');
    Route::get('orderhistory', 'App\Http\Controllers\OrderController@orderhistory');

    Route::get('users', 'App\Http\Controllers\UserController@users');
Route::get('view-user/{id}', 'App\Http\Controllers\UserController@viewUser');
Route::get('edit-user/{id}', 'App\Http\Controllers\UserController@editUser');
Route::get('edituser/{id}', 'App\Http\Controllers\UserController@updateUser');
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/deleteuser/{id}', [UserController::class, 'destroy'])->name('user.destroy');
Route::GET('/createuser', 'App\Http\Controllers\UserController@create');

Route::post('/userstore', [UserController::class, 'store']);
