<?php

use App\Http\Controllers\BuyEcurrencyController;
use App\Http\Controllers\landingPageController;
use App\Http\Controllers\SellEcurrencyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserVerificationAccountController;
use Illuminate\Support\Facades\Route;

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


//landing page

Route::get('/',[landingPageController::class,'index']);

//user routes

Route::get('/user/about', [UserController::class, 'about'])->name('user.about')->middleware(['auth','userAuth']);
Route::get('/user/policy', [UserController::class, 'policy'])->name('user.policy')->middleware(['auth','userAuth']);
Route::get('/user/FAQ', [UserController::class, 'FAQ'])->name('user.FAQ')->middleware(['auth','userAuth']);
Route::get('/user/help', [UserController::class, 'help'])->name('user.help')->middleware(['auth','userAuth']);
Route::get('/user/contact', [UserController::class, 'contact'])->name('user.contact')->middleware(['auth','userAuth']);
Route::get('/user/news', [UserController::class, 'news'])->name('user.news')->middleware(['auth','userAuth']);
Route::resource('/user', UserController::class)->middleware(['auth','userAuth']);



//buying e-currency routes

Route::get('/user/buy/ecurrency', [BuyEcurrencyController::class, 'index'])->name('user.buy.ecurrency')->middleware(['auth','userAuth']);
Route::post('/user/buy/ecurrency/store', [BuyEcurrencyController::class, 'store'])->name('user.buy.ecurrency.store')->middleware(['auth','userAuth']);
// delete the latest transaction
Route::post('users/transcation/delete/{id}',[BuyEcurrencyController::class, 'destroy'])->name('user.transcation.delete')->middleware(['auth','userAuth']);

//selling e-currency routes
Route::get('/user/sell/ecurrency', [SellEcurrencyController::class, 'index'])->name('user.sell.ecurrency')->middleware(['auth','userAuth']);
Route::post('/user/sell/ecurrency/store', [SellEcurrencyController::class, 'store'])->name('user.sell.ecurrency.store')->middleware(['auth','userAuth']);
Route::post('users/sell/transcation/delete/{id}',[SellEcurrencyController::class, 'destroy'])->name('user.selling.transcation.delete')->middleware(['auth','userAuth']);

// user account verification center
Route::get('/user/account/verification', [UserVerificationAccountController::class, 'index'])->name('user.account.verification')->middleware(['auth','userAuth']);
Route::post('/user/account/verification/store', [UserVerificationAccountController::class, 'store'])->name('user.account.verification.store')->middleware(['auth','userAuth']);


require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
