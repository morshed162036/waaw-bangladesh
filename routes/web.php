<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\client\HomeController;
use App\Http\Controllers\client\CartController;
use App\Http\Controllers\client\WishlistController;

use App\Http\Controllers\server\AdminController;
use App\Http\Controllers\server\CategoryController;
use App\Http\Controllers\server\CustomerController;
use App\Http\Controllers\server\ProductController;
use App\Http\Controllers\server\StockController;
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
Route::get('/product-details/{id?}', [HomeController::class, 'product_details'])->name('client.product_details');
Route::get('/cart-wishlist-count',[HomeController::class,'getCartAndWishlistCount'])->name('cart.wishlist.count');
Route::get('/cart-add', [HomeController::class, 'cart'])->name('client.cart');
Route::get('/wishlists', [HomeController::class, 'wishlist'])->name('client.wishlist');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('client.checkout');
Route::get('/contuct', [HomeController::class, 'contuct'])->name('client.contuct');
Route::get('/about', [HomeController::class, 'about'])->name('client.about');
Route::get('/user_login', [HomeController::class, 'login_website'])->name('login.website');
Route::get('/my_account', [HomeController::class, 'account'])->name('client.account');
Route::get('/cart',[CartController::class,"index"])->name('cart.index');
Route::post('/cart/store',[CartController::class,"addToCart"])->name('cart.store');
Route::put('/cart/update',[CartController::class,"updateCart"])->name('cart.update');
Route::delete('/cart/remove',[CartController::class,"removeItem"])->name('cart.remove');
Route::delete('/cart/clear',[CartController::class,"clearCart"])->name('cart.clear');
Route::get('/wishlist',[WishlistController::class,"getWishlistedProducts"])->name('wishlist.list');
Route::post('/wishlist/add',[WishlistController::class,"addProductToWishlist"])->name('wishlist.store');
Route::delete('/wishlist/remove',[WishlistController::class,"removeProductFromwishlist"])->name('wishlist.remove');
Route::delete('/wishlist/clear',[WishlistController::class,"clearWishlist"])->name('wishlist.clear');
Route::post('/wishlist/clear',[WishlistController::class,'moveToCart'])->name('wishlist.move.to.cart');

Route::prefix('/')->group(function(){

    Route::match(['get', 'post'], 'login',[AdminController::class,'login'])->name('admin.login');
    Route::group(['middleware'=>['user']],function(){

        Route::get('logout',[AdminController::class,'logout'])->name('admin.logout');
        Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');
        Route::post('register', [AdminController::class, 'store'])->name('customer.register');
        Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

        Route::resource('category', CategoryController::class);
        Route::get('append-categories-level',[CategoryController::class,'appendCategoryLevel'])->name('appendCategory');
        Route::post('update-category-status',[CategoryController::class,'updateCategoryStatus'])->name('updateCategoryStatus');

        Route::resource('product', ProductController::class);
        Route::post('update-product-status',[ProductController::class,'updateProductStatus'])->name('updateProductStatus');
        Route::resource('stock', StockController::class);
        Route::resource('customer', CustomerController::class);
    });

});

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__ . '/auth.php';
