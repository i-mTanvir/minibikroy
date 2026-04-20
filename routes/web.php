<?php

use App\Http\Controllers\Customer\CustomerDashboardController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/customer/dashboard');
Route::get('/customer/dashboard', [CustomerDashboardController::class, 'index'])
    ->name('customer.dashboard');
