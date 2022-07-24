<?php

use App\Http\Controllers\landingPageController;
use App\Http\Controllers\UserController;
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


require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
