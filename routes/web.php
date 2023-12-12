<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountsController;
use App\Http\Controllers\BalanceController;
use App\Http\Controllers\HomeController;
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
Route::get('/card-control', [App\Http\Controllers\PagesController::class, 'cardControl'])->name('cardControl');
Route::get('/wire-transfer', [App\Http\Controllers\PagesController::class, 'wireTransfer'])->name('wireTransfer');
Route::get('/transaction-history', [App\Http\Controllers\PagesController::class, 'transactionHistory'])->name('transactionHistory');


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('accounts',AccountsController::class);
Route::resource('balances',BalanceController::class);
