<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\starbucks_controller;
use App\Http\Controllers\Company_controller;
use App\Http\Controllers\testController;
use App\Http\Controllers\CartController;

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

Route::resource('companies', Company_controller::class);

// Starbuck ===
Route::get('testzone', [starbucks_controller::class, 'testzone']);

Route::get('dashboard', [starbucks_controller::class, 'dashboard']);
Route::get('login', [starbucks_controller::class, 'login'])->name('login');
Route::post('custom-login', [starbucks_controller::class, 'customLogin'])->name('login.custom');

Route::get('registration', [starbucks_controller::class, 'registration']);
Route::post('custom-registration', [starbucks_controller::class, 'customRegistration'])->name('register.custom');

Route::get('signout', [starbucks_controller::class, 'signOut']);

Route::get('member_input', [starbucks_controller::class, 'member_input']);
Route::get('member_list', [starbucks_controller::class, 'member_list']);
Route::get('manager', [starbucks_controller::class, 'manager']);

// Route::post('/index/checklogin', [starbucks_controller::class, 'checklogin']);
Route::post('store_member', [starbucks_controller::class, 'store_member'])->name('store_member');
// === Starbuck

// CART SYSTEM ===
Route::get('catalog', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
Route::post('checkout', [starbucks_controller::class, 'store_order'])->name('cart.checkout');
// === CART SYSTEM

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profile');
});

// INI NYOBAAAAA

// Route::get('dashboard', [testController::class, 'dashboard']); 
// Route::get('login', [testController::class, 'index'])->name('login');
// Route::post('custom-login', [testController::class, 'customLogin'])->name('login.custom'); 
// Route::get('registration', [testController::class, 'registration'])->name('register-user');
// Route::post('custom-registration', [testController::class, 'customRegistration'])->name('register.custom'); 
// Route::get('signout', [testController::class, 'signOut'])->name('signout');