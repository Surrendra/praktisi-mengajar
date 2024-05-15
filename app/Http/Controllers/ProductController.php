<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index',[
            'products' => $products
        ]);
    }

    public function create()
    {
        $product_categories = ProductCategory::all();
        return view('product.create',[
            'product_categories' => $product_categories
        ]);
    }

    public function store(Request $request)
    {
        $product = Product::create([
            'product_category_id' => $request->product_category_id,
            'name' => $request->name,
            'description' => $request->description,
            'unit' => $request->unit,
            'maximal_stock' => $request->maximal_stock,
            'minimal_stock' => $request->minimal_stock,
            'selling_price' => $request->selling_price,
            'purchase_price' => $request->purchase_price
        ]);
        
        $product->save();
        return redirect()->route('products.index')
            ->with('success','Produk Berhasil Ditambahkan !');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $product_categories = ProductCategory::all();
        return view('product.edit',[
            'product' => $product,
            'product_categories' => $product_categories
        ]);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->product_category_id = $request->product_category_id;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->unit = $request->unit;
        $product->maximal_stock = $request->maximal_stock;
        $product->minimal_stock = $request->minimal_stock;
        $product->selling_price = $request->selling_price;
        $product->purchase_price = $request->purchase_price;
        $product->save();
        return redirect()->route('products.index')
            ->with('success','Produk Berhasil Diubah !');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index')
            ->with('success','Produk Berhasil Dihapus !');
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('product.show',[
            'product' => $product
        ]);
    }
}
