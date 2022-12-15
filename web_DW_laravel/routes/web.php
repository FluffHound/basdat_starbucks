<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dwStarbucks_control;

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

Route::get('test', [dwStarbucks_control::class, 'test']);
// Landing Cabang
Route::get('cabang', [dwStarbucks_control::class, 'cabang']);
// Landing produk
Route::get('produk', [dwStarbucks_control::class, 'produk']);
//  Landing  karyawan 
Route::get('karyawan', [dwStarbucks_control::class, 'karyawan']);
// Fact Penjualan
Route::get('fact_penjualan', [dwStarbucks_control::class, 'penjualan']);
// Tipe Bayar
Route::get('tipebayar', [dwStarbucks_control::class, 'tipebayar']);