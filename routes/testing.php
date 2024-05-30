<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\TransactionController;


Route::get('/json', function () {
    $products = json_decode(file_get_contents(storage_path('data/products.json')), true);
    $products = collect($products);
    // select where name like will return array
    // $products = $products->where('name', 'like', '%will%');
    // dd($products);


    // count the collection group by category
    // $products = $products->groupBy('category');
    // $products = $products->map(function($item){
    //     return $item->count();
    // });  

    $students = json_decode(file_get_contents(storage_path('data/students.json')), true);
    $students = collect($students);


    // group by gender and count
    // $students = $students->groupBy('gender');
    // $students = $students->map(function ($item) {
    //     return $item->count();
    // });

    // add new total grade using map
    $students = $students->map(function ($item) {
        $item['total_grade'] = ($item['maths'] + $item['physics'] + $item['english']) / 3;
        return $item;
    });

    $students = $students->where('total_grade', '>', 80);
    
    // $request->url()
});

