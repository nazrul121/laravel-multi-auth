<?php
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'common','middleware'=>['common','auth'],'namespace'=>'common'],function() {
    Route::get('profile', [App\Http\Controllers\common\DashboardController::class,'index'])->name('common.profile');
});