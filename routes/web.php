<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Str;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/testing/collection', function () {
    $json_products = file_get_contents(storage_path('data/products.json'));
    $array_products = json_decode($json_products,true);
    $products = collect($array_products);


    $products->push([ #push
        "id" => Str::random(50),
        "name" => "New Product from collection",
        "description" => "This is a new product from collection",
        "features" => ["New feature 1", "New feature 2"],
        "price" => 100000,
        "keywords" => ["New", "Product"],
        "url" => "https://example.com/new-product",
        "category" => "New Category",
        "subcategory" => "New Subcategory",
    ]);
    return $products;


    $last_data = $products->last();
    $first_data = $products->first();
    $count_data = $products->count();
    $map_products = $products->map(function ($product) {
        $product['slug'] = Str::slug($product['name']);
        $tax = 0.1 * $product['price'];
        $product['tax'] = $tax;
        $product['price_after_tax'] = $product['price'] + $tax;
        return $product;
    });

    $pluck_products = $products->pluck('category'); # pluck
    $product_by_categories = $products->filter(function ($product) { #filter
        return Str::contains($product['name'], 'Google'); 
    });

    
    return [
        'count_data' => $count_data,
        'product_by_categories' => $product_by_categories,
        'pluck_products' => $pluck_products,
        'map_products' => $map_products,
        'last_data' => $last_data,
        'first_data' => $first_data,
        
    ];
});


Route::resource('products', ProductController::class);
Route::resource('product_categories', ProductCategoryController::class);
Route::resource('transactions', TransactionController::class);


