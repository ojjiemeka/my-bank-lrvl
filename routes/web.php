<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BalanceController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RestrictionController;
use App\Http\Controllers\UserAuth\AuthController;
use Illuminate\Support\Facades\Auth;

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


Route::get('/', [LoginController::class, 'showLoginForm'])->name('signIn');
Route::post('/process', [AuthController::class, 'loginFunction'])->name('loginFunction');

// Route::middleware(['checkRole:user'])->group(function () {


// });

Auth::routes();


Route::middleware(['auth', 'checkRole:user'])->group(function () {
    
    // Routes accessible only to users
    Route::get('/dashboard', [App\Http\Controllers\PagesController::class, 'index'])->name('dashboard');
    Route::get('/cards', [App\Http\Controllers\PagesController::class, 'cardControl'])->name('cardControl');
    Route::get('/payments', [App\Http\Controllers\PagesController::class, 'payments'])->name('payments');
    Route::get('/payment-exchange', [App\Http\Controllers\PagesController::class, 'paymentExchange'])->name('paymentExchange');
    Route::get('/payment-bill', [App\Http\Controllers\PagesController::class, 'paymentBill'])->name('paymentBill');
    Route::get('/payment-request', [App\Http\Controllers\PagesController::class, 'paymentRequest'])->name('paymentRequest');
    Route::get('/payment-transfer', [App\Http\Controllers\PagesController::class, 'paymentTransfer'])->name('paymentTransfer');
    Route::get('/bank-transfer', [App\Http\Controllers\PagesController::class, 'bankTransfer'])->name('bankTransfer');
    Route::get('/pin', [App\Http\Controllers\PagesController::class, 'enterPin'])->name('enterPin');
    Route::get('/topUp', [App\Http\Controllers\PagesController::class, 'topUp'])->name('topUp');
    Route::get('/activity', [App\Http\Controllers\PagesController::class, 'activity'])->name('activity');
    Route::get('/reports', [App\Http\Controllers\PagesController::class, 'reports'])->name('reports');
    Route::get('/account-profile', [App\Http\Controllers\PagesController::class, 'accountProfile'])->name('accountProfile');
    Route::post('/processing', [App\Http\Controllers\TransactionController::class, 'fundsTransfer'])->name('fundsTransfer');
    Route::get('/support', [App\Http\Controllers\PagesController::class, 'support'])->name('support');
    Route::get('/done', [App\Http\Controllers\PagesController::class, 'done'])->name('done');
    Route::get('/card-limit', [App\Http\Controllers\PagesController::class, 'cardLimit'])->name('cardLimit');
    // Route::get('/', [App\Http\Controllers\PagesController::class, ''])->name('');
    // Route::get('/', [App\Http\Controllers\PagesController::class, ''])->name('');
    // Route::get('/', [App\Http\Controllers\PagesController::class, ''])->name('');

    // Your admin routes go here
});

Route::middleware(['auth', 'checkRole:admin'])->group(function () {
    // Admin routes go here
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('accounts', AccountsController::class);
    Route::resource('balances', BalanceController::class);
    Route::resource('restrictions', RestrictionController::class);
    Route::resource('history', HistoryController::class);

    // Other admin routes...
});
// Route::get('/home', [HomeController::class, 'index'])->name('home');
   

