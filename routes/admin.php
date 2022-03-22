<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('/products',[ProductController::class,'index'])
    ->name('backend.products');
    Route::get('/products/create',[ProductController::class,'create'])
    ->name('backend.products.create');
    Route::post('/products/create',[ProductController::class,'store'])
    ->name('backend.products.store');


});


