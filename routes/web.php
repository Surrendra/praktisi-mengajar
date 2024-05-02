<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductCategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product_category', [ProductCategoryController::class, 'index'])->name('product_category.index');

