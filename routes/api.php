<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Api\ProductCategoryController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/login', [LoginController::class, 'login']);


Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/product-category/get-data', [ProductCategoryController::class, 'getData']);
    Route::get('/product-category/find/{id}', [ProductCategoryController::class, 'find']);
    Route::post('/product-category/create', [ProductCategoryController::class, 'create']);
    Route::post('/product-category/update/{id}', [ProductCategoryController::class, 'update']);
    Route::post('/product-category/delete/{id}', [ProductCategoryController::class, 'delete']);
});



