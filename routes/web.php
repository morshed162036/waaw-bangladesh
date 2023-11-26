<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\server\AdminController;
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


Route::get('/', [HomeController::class, 'index'])->name('client.home');
Route::get('/shop', [HomeController::class, 'shop'])->name('client.shop');
Route::get('/product-details', [HomeController::class, 'product_details'])->name('client.product_details');
Route::get('/cart', [HomeController::class, 'cart'])->name('client.cart');
Route::get('/wishlist', [HomeController::class, 'wishlist'])->name('client.wishlist');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('client.checkout');
Route::get('/contuct', [HomeController::class, 'contuct'])->name('client.contuct');
Route::get('/about', [HomeController::class, 'about'])->name('client.about');
Route::get('/user_login', [HomeController::class, 'login_website'])->name('login.website');
Route::get('/my_account', [HomeController::class, 'account'])->name('client.account');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('/')->group(function(){


      Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');


});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
