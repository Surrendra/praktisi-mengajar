<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Transaction;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // truncate the table
        Transaction::truncate();
        Transaction::create([
            'member_id' => 1,
            'member_name' => 'John Doe',
            'member_email' => 'johndoe@email.com',
            'transaction_date' => '2024-05-15',
            'subtotal' => 100000,
            'discount' => 0,
            'total' => 100000,
        ]);

        Transaction::create([
            'member_id' => 2,
            'member_name' => 'Jane Doe',
            'member_email' => 'janedoe@gmail.com',
            'transaction_date' => '2024-05-15',
            'subtotal' => 200000,
            'discount' => 0,
            'total' => 200000,
        ]);
    }
}
