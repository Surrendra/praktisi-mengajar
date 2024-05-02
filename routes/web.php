<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductCategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test_page', function () {
    return view('layouts.master');
});

Route::resource('products', ProductController::class);
Route::resource('product_categories', ProductCategoryController::class);


