<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\TransactionController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('products', ProductController::class);
Route::resource('product_categories', ProductCategoryController::class);
Route::resource('transactions', TransactionController::class);


