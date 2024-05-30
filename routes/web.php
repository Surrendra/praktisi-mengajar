<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\TransactionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/json', function () {
    $products = json_decode(file_get_contents(storage_path('app/data/products.json')),true);
    $products = collect($products);
    // select where name like will return array
    // $products = $products->where('name', 'like', '%will%');
    // dd($products);
    

    // count the collection group by category
    // $products = $products->groupBy('category');
    // $products = $products->map(function($item){
    //     return $item->count();
    // });  

    $students = json_decode(file_get_contents(storage_path('data/students.json')),true);
    $students = collect($students);
    $students = $students->groupBy('gender');
    $students = $students->map(function($item){
        return $item->count();
    });
    return $students;
});

Route::resource('products', ProductController::class);
Route::resource('product_categories', ProductCategoryController::class);
Route::resource('transactions', TransactionController::class);


