<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/', [AdminController::class, 'index'])->name('index');
});
//
