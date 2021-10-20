<?php

use Illuminate\Support\Facades\Route;

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

//El camino largo
// Route::get('products', [App\Http\Controllers\ProductController::class,'index'])->name('products.index');
// Route::get('products/create',[App\Http\Controllers\ProductController::class,'create'])->name('products.create');
// Route::get('products/edit',[App\Http\Controllers\ProductController::class,'show'])->name('products.edit');
// Route::get('products/show',[App\Http\Controllers\ProductController::class,'edit'])->name('products.show');
// Route::delete('products/delete',[App\Http\Controllers\ProductController::class,'destroy'])->name('products.delete');
// Route::post('products/store',[App\Http\Controllers\ProductController::class,'store'])->name('products.store');
// Route::put('products/update',[App\Http\Controllers\ProductController::class,'update'])->name('products.update');

//El camino corto
Route::resource('products', App\Http\Controllers\ProductController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
