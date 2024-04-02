<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Auth::routes([
    'register' => false
]);

Route::prefix('admin')->middleware('auth')->group(function() {
    Route::get('/', [DashboardController::class, 'index']);
});