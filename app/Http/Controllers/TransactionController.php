<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Product;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();
        return view('transaction.index', compact('transactions'));
    }

    public function create()
    {
        $products = Product::all();
        return view('transaction.create',[
            'products' => $products,
        ]);
    }

    public function store(Request $request)
    {
        $transaction = Transaction::create([
            'member_id' => $request->member_id,
            'member_name' => $request->member_name,
            'member_email' => $request->member_email,
            'transaction_date' => $request->transaction_date,
            'subtotal' => 0,
            'discount' => 0,
            'total' => 0,
        ]);

        $total = 0;
        foreach ($request->products as $item) {
            if (!empty($item['qty'])) {
                $product = Product::find($item['product_id']);
                $quantity = $item['qty'];
                $subtotal = $product->selling_price * $quantity;
                $total += $subtotal;
                $transaction->products()->attach($product, [
                    'qty' => $quantity,
                    'selling_price' => $product->selling_price,
                    'subtotal' => $subtotal,
                ]);
            }
        }

        $transaction->update([
            'subtotal' => $total,
            'total' => $total,
        ]);

        return redirect()->route('transactions.index')
            ->with('success', 'Transaction created successfully.');
    }


}
