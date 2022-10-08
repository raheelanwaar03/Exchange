<?php

use App\Http\Controllers\AdminCheckAccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SocialPages;
use Illuminate\Support\Facades\Route;

// Admin Routes

Route::get('/admin/news', [AdminController::class, 'news'])->name('admin.news')->middleware(['auth', 'adminAuth']);
Route::get('/admin/newsDetails', [AdminController::class, 'newsDetails'])->name('admin.newsDetails')->middleware(['auth', 'adminAuth']);
Route::post('/admin/newSaving', [AdminController::class, 'newSaving'])->name('admin.newSaving')->middleware(['auth', 'adminAuth']);
Route::get('/admin/newsDestroy/{id}', [AdminController::class, 'destroyNews'])->name('admin.newsDestroy')->middleware(['auth', 'adminAuth']);
Route::get('/admin/buyingRequest', [AdminController::class, 'buyingRequest'])->name('admin.buyingRequest')->middleware(['auth', 'adminAuth']);
Route::get('/admin/sellingRequest', [AdminController::class, 'sellingRequest'])->name('admin.sellingRequest')->middleware(['auth', 'adminAuth']);
Route::get('/admin/buyingRequest/approvedBuyView', [AdminController::class, 'approvedBuyView'])->name('admin.buyingRequest.approvedBuyView')->middleware(['auth', 'adminAuth']);
Route::get('/admin/buyingRequest/completeBuy', [AdminController::class, 'completeBuyView'])->name('admin.buyingRequest.completeBuyView')->middleware(['auth', 'adminAuth']);
Route::get('/admin/buyingRequest/complete/{id}', [AdminController::class, 'complete'])->name('admin.buyingRequest.complete')->middleware(['auth', 'adminAuth']);
Route::get('/admin/buyingRequest/decline/{id}', [AdminController::class, 'decline'])->name('admin.buyingRequest.decline')->middleware(['auth', 'adminAuth']);
Route::get('/admin/buyingRequest/approve/{id}', [AdminController::class, 'approveBuy'])->name('admin.buyingRequest.approveBuy')->middleware(['auth', 'adminAuth']);
Route::get('/admin/sellingRequest/complete/{id}', [AdminController::class, 'completeSell'])->name('admin.sellingRequest.completeSell')->middleware(['auth', 'adminAuth']);
Route::get('/admin/sellingRequest/completeSell', [AdminController::class, 'completeSellView'])->name('admin.sellingRequest.completeSellView')->middleware(['auth', 'adminAuth']);
Route::get('/admin/sellingRequest/decline/{id}', [AdminController::class, 'declineSell'])->name('admin.sellingRequest.declineSell')->middleware(['auth', 'adminAuth']);
Route::get('/admin/sellingRequest/approveSellView', [AdminController::class, 'approveSellView'])->name('admin.sellingRequest.approveSellView')->middleware(['auth', 'adminAuth']);
Route::get('/admin/sellingRequest/approve/{id}', [AdminController::class, 'approveSell'])->name('admin.sellingRequest.approveSell')->middleware(['auth', 'adminAuth']);
Route::get('/admin/review', [AdminController::class, 'review'])->name('admin.review')->middleware(['auth', 'adminAuth']);
Route::get('/admin/review/delete/{id}', [AdminController::class, 'destroyReview'])->name('admin.review.delete')->middleware(['auth', 'adminAuth']);
Route::get('/admin/allUser', [AdminController::class, 'allUser'])->name('admin.allUser')->middleware(['auth', 'adminAuth']);


// admin account verification request routes
Route::get('/admin/account/verification', [AdminCheckAccountController::class, 'index'])->name('admin.account.verification')->middleware(['auth', 'adminAuth']);
Route::get('/admin/account/verification/{id}', [AdminCheckAccountController::class, 'action'])->name('admin.account.verification.verify')->middleware(['auth', 'adminAuth']);
Route::get('/admin/account/verification/reject/{id}', [AdminCheckAccountController::class, 'reject'])->name('admin.account.verification.reject')->middleware(['auth', 'adminAuth']);
Route::get('/admin/Rejected/accounts', [AdminCheckAccountController::class, 'rejectedAccounts'])->name('admin.Rejected.accounts')->middleware(['auth', 'adminAuth']);
Route::get('/admin/unverified/accounts/{id}', [AdminCheckAccountController::class, 'unverified'])->name('admin.unverified.accounts')->middleware(['auth', 'adminAuth']);


//Admin Social pages routes
Route::get('/admin/contactUs', [SocialPages::class, 'contactUs'])->name('admin.contactUs')->middleware(['auth', 'adminAuth']);
Route::get('/admin/aboutUs', [SocialPages::class, 'aboutUs'])->name('admin.aboutUs')->middleware(['auth', 'adminAuth']);
Route::get('/admin/policy', [SocialPages::class, 'policy'])->name('admin.policy')->middleware(['auth', 'adminAuth']);
Route::get('/admin/help', [SocialPages::class, 'help'])->name('admin.help')->middleware(['auth', 'adminAuth']);

//resourse Controller
Route::resource('/admin', AdminController::class)->middleware(['auth', 'adminAuth']);



