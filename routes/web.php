<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/redirect',[HomeController::class,'redirect']);
// frontend route pages
Route::get('/',[HomeController::class,'index'])->name('frontend.index');

Route::get('/about',[HomeController::class,'about'])->name('frontend.about');
Route::get('/products',[HomeController::class,'products'])->name('frontend.products');
Route::get('/contact',[HomeController::class,'contact'])->name('frontend.contact');
Route::get('/search',[HomeController::class,'search'])->name('frontend.search');

Route::post('/addToCart/{id}',[HomeController::class,'addToCart'])->name('frontend.addToCart');

Route::get('/viewCart',[HomeController::class,'viewCart'])->name('frontend.viewCart');
Route::get('/deleteCartItem/{id}',[HomeController::class,'deleteCartItem'])->name('frontend.deleteCartItem');
Route::get('/confirmOrder',[HomeController::class,'confirmOrder'])->name('frontend.confirmOrder');

// these route are for test only
Route::get('/test',[HomeController::class,'testTest']);
