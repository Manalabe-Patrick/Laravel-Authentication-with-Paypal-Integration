<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return view('home');
    });
    Route::get('/', function () {
        return view('home');
    });

    // Route::get('/', [HomeController::class, 'index']);
    Route::post('pay', [PaymentController::class, 'pay'])->name('payment');
    Route::get('success', [PaymentController::class, 'success']);
    Route::get('error', [PaymentController::class, 'error']);
});
