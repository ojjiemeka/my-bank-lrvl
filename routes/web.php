<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountsController;
use App\Http\Controllers\BalanceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RestrictionController;

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


Route::get('/', [PagesController::class, 'index']);

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\PagesController::class, 'index'])->name('dashboard');
Route::get('/cards', [App\Http\Controllers\PagesController::class, 'cardControl'])->name('cardControl');
Route::get('/payments', [App\Http\Controllers\PagesController::class, 'payments'])->name('payments');
Route::get('/payment-exchange', [App\Http\Controllers\PagesController::class, 'paymentExchange'])->name('paymentExchange');
Route::get('/payment-bill', [App\Http\Controllers\PagesController::class, 'paymentBill'])->name('paymentBill');
Route::get('/payment-request', [App\Http\Controllers\PagesController::class, 'paymentRequest'])->name('paymentRequest');
Route::get('/payment-transfer', [App\Http\Controllers\PagesController::class, 'paymentTransfer'])->name('paymentTransfer');
Route::get('/activity', [App\Http\Controllers\PagesController::class, 'activity'])->name('activity');
Route::get('/repots', [App\Http\Controllers\PagesController::class, 'reports'])->name('reports');


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('accounts', AccountsController::class);
Route::resource('balances', BalanceController::class);
Route::resource('restrictions', RestrictionController::class);
