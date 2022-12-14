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

// PUNYAKUUU JANGAN DIEDIT
// Route::get('/test', function () {
//     return view('testsite');
// });

Route::get('test', [dwStarbucks_control::class, 'index']);

Route::get('cabang', [dwStarbucks_control::class, 'grafik']);
Route::get('produk', [dwStarbucks_control::class, 'grafik']);

// END OF MY SECTION