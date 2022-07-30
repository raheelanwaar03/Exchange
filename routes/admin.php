<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


Route::get('/admin/news', [AdminController::class, 'news'])->name('admin.news')->middleware(['auth','adminAuth']);
Route::get('/admin/newsDetails', [AdminController::class, 'newsDetails'])->name('admin.newsDetails')->middleware(['auth','adminAuth']);
Route::post('/admin/newSaving', [AdminController::class, 'newSaving'])->name('admin.newSaving')->middleware(['auth','adminAuth']);
Route::get('/admin/buyingRequest', [AdminController::class, 'buyingRequest'])->name('admin.buyingRequest')->middleware(['auth','adminAuth']);

Route::resource('/admin', AdminController::class)->middleware(['auth','adminAuth']);
