<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->updateOrInsert([
            'code' => 'P001',
        ],[
            'name' => 'Produk Rumah Tangga',
            'description' => 'Produk ini digunakan untuk keperluan rumah tangga',
            'price' => 10000,
            'stock' => 10,
            'min_stock' => 25,
            'max_stock' => 1000,
        ]);

        DB::table('products')->updateOrInsert([
            'code' => 'P002',
        ], [
            'name' => 'Produk Dapur',
            'description' => 'Produk ini digunakan untuk keperluan dapur',
            'price' => 20000,
            'stock' => 5,
            'min_stock' => 123,
            'max_stock' => 678,
        ]);
    }
}
