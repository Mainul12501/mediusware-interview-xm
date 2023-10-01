<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\WebsiteController;
use App\Http\Controllers\Backend\DepositController;
use App\Http\Controllers\Backend\WithdrawalController;

Route::get('/', [WebsiteController::class, 'home'])->name('front.home');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::resources([
        'deposits' => DepositController::class,
        'withdrawals' => WithdrawalController::class
    ]);
    Route::get('/all-transactions', [WebsiteController::class, 'showTransactions'])->name('all-transactions');
});
