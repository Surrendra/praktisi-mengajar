<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductCategory;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product_category = ProductCategory::where('name', 'Barang Elextronik')->first();
        Product::updateOrCreate([
            'name' => 'Laptop Asus',
        ],[
            'product_category_id' => $product_category->id,
            'description' => 'Laptop Asus',
            'selling_price' => 10000000,
            'purchase_price' => 8000000,
            'maximal_stock' => 100,
            'minimal_stock' => 10,
            'unit' => 'pcs',
        ]);

        Product::updateOrCreate([
            'name' => 'Laptop Lenovo',
        ], [
            'product_category_id' => $product_category->id,
            'description' => 'Laptop Lenovo',
            'selling_price' => 9000000,
            'purchase_price' => 7000000,
            'maximal_stock' => 100,
            'minimal_stock' => 10,
            'unit' => 'pcs',
        ]);

        Product::updateOrCreate([
            'name' => 'Laptop HP',
        ], [
            'product_category_id' => $product_category->id,
            'description' => 'Laptop HP',
            'selling_price' => 8000000,
            'purchase_price' => 6000000,
            'maximal_stock' => 100,
            'minimal_stock' => 10,
            'unit' => 'pcs',
        ]);


        $product_category = ProductCategory::where('name', 'Product Umum')->first();
        Product::updateOrCreate([
            'name' => 'Buku Tulis',
        ],[
            'product_category_id' => $product_category->id,
            'description' => 'Buku Tulis',
            'selling_price' => 5000,
            'purchase_price' => 3000,
            'maximal_stock' => 100,
            'minimal_stock' => 10,
            'unit' => 'pcs',
        ]);

        Product::updateOrCreate([
            'name' => 'Pensil',
        ], [
            'product_category_id' => $product_category->id,
            'description' => 'Pensil',
            'selling_price' => 2000,
            'purchase_price' => 1000,
            'maximal_stock' => 100,
            'minimal_stock' => 10,
            'unit' => 'pcs',
        ]);
    }
}
