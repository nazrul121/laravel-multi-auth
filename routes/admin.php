<?php
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'admin','middleware'=>['admin','auth'],'namespace'=>'admin'],function() {
    Route::get('dashboard', [App\Http\Controllers\admin\DashboardController::class,'index'])->name('admin.dashboard');
});