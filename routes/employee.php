<?php
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'employee','middleware'=>['employee','auth'],'namespace'=>'employee'],function() {
    Route::get('dashboard', [App\Http\Controllers\employee\DashboardController::class,'index'])->name('employee.dashboard');
});