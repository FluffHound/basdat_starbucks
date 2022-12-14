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
Route::get('cobak', [dwStarbucks_control::class, 'cobak']);
// END OF MY SECTION

Route::get('landing', [dwStarbucks_control::class, 'grafik']);

