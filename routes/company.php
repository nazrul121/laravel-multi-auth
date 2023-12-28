<?php
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'company','middleware'=>['company','auth'],'namespace'=>'company'],function() {
    Route::get('dashboard', [App\Http\Controllers\company\DashboardController::class,'index'])->name('company.dashboard');
});