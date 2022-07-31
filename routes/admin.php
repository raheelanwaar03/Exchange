<?php

use App\Http\Controllers\AdminCheckAccountController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


Route::get('/admin/news', [AdminController::class, 'news'])->name('admin.news')->middleware(['auth','adminAuth']);
Route::get('/admin/newsDetails', [AdminController::class, 'newsDetails'])->name('admin.newsDetails')->middleware(['auth','adminAuth']);
Route::post('/admin/newSaving', [AdminController::class, 'newSaving'])->name('admin.newSaving')->middleware(['auth','adminAuth']);
Route::get('/admin/buyingRequest', [AdminController::class, 'buyingRequest'])->name('admin.buyingRequest')->middleware(['auth','adminAuth']);
Route::get('/admin/sellingRequest', [AdminController::class, 'sellingRequest'])->name('admin.sellingRequest')->middleware(['auth','adminAuth']);
Route::get('/admin/buyingRequest/complete/{id}', [AdminController::class, 'complete'])->name('admin.buyingRequest.complete')->middleware(['auth','adminAuth']);
Route::get('/admin/buyingRequest/decline/{id}', [AdminController::class, 'decline'])->name('admin.buyingRequest.decline')->middleware(['auth','adminAuth']);
Route::get('/admin/sellingRequest/complete/{id}', [AdminController::class, 'completeSell'])->name('admin.sellingRequest.completeSell')->middleware(['auth','adminAuth']);
Route::get('/admin/sellingRequest/decline/{id}', [AdminController::class, 'declineSell'])->name('admin.sellingRequest.declineSell')->middleware(['auth','adminAuth']);
Route::get('/admin/sellingRequest/closed/{id}', [AdminController::class, 'closed'])->name('admin.sellingRequest.closed')->middleware(['auth','adminAuth']);

Route::resource('/admin', AdminController::class)->middleware(['auth','adminAuth']);

// admin account verification request routes
Route::get('/admin/account/verification', [AdminCheckAccountController::class, 'index'])->name('admin.account.verification')->middleware(['auth','adminAuth']);
Route::get('/admin/account/verification/{id}', [AdminCheckAccountController::class, 'action'])->name('admin.account.verification.verify')->middleware(['auth','adminAuth']);
Route::get('/admin/account/verification/reject/{id}', [AdminCheckAccountController::class, 'reject'])->name('admin.account.verification.reject')->middleware(['auth','adminAuth']);
