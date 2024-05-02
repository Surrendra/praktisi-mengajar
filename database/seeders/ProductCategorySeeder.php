<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductCategory::updateOrCreate([
            'code' => '001',
        ],[
            'code' => '001',
            'name' => 'Barang Elektronik',
            'description' => 'Kategori barang elektronik',
        ]);

        ProductCategory::updateOrCreate([
            'code' => '002',
        ],[
            'code' => '002',
            'name' => 'Barang Dapur',
            'description' => 'Kategori barang dapur',
        ]);

        ProductCategory::updateOrCreate([
            'code' => '003',
        ],[
            'code' => '003',
            'name' => 'Barang Kesehatan',
            'description' => 'Kategori barang kesehatan',
        ]);
    }
}
