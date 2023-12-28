<?php
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'hr','middleware'=>['hr','auth'],'namespace'=>'hr'],function() {
    Route::get('dashboard', [App\Http\Controllers\hr\DashboardController::class,'index'])->name('hr.dashboard');
});