<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductCategory;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductCategory::updateOrCreate([
            'name' => 'Product Umum',
        ],[
            'description' => 'Kategori produk umum',
        ]);

        ProductCategory::updateOrCreate([
            'name' => 'Barang Elextronik',
        ], [
            'description' => 'Kategori produk elektronik',
        ]);
    }
}
