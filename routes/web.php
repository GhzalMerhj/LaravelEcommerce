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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/redirect',[HomeController::class,'redirect']);
// frontend route pages
Route::get('/home',[HomeController::class,'index'])->name('frontend.index');
Route::get('/about',[HomeController::class,'about'])->name('frontend.about');
Route::get('/products',[HomeController::class,'products'])->name('frontend.products');
Route::get('/contact',[HomeController::class,'contact'])->name('frontend.contact');
