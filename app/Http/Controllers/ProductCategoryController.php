<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;

class ProductCategoryController extends Controller
{
    public function index()
    {
        $product_categories = ProductCategory::all();
        return view('product_category.index',[
            'product_categories' => $product_categories
        ]);
    }

    public function create()
    {
        return view('product_category.create');
    }

    public function store(Request $request)
    {
        $product_category = new ProductCategory();
        $product_category->name = $request->name;
        $product_category->description = $request->description;
        $product_category->save();

        return redirect()->route('product_categories.index')
            ->with('success','Produk Berhasil Ditambahkan !');
        
    }

    public function edit($product_category_id)
    {
        $product_category = ProductCategory::find($product_category_id);
        return view('product_category.edit',[
            'product_category' => $product_category
        ]);
    }

    public function update(Request $request,$product_category_id)
    {
        $product_catetory = ProductCategory::find($product_category_id);
        $product_catetory->name = $request->name;
        $product_catetory->description = $request->description;
        $product_catetory->save();

        return redirect()->route('product_categories.index')
            ->with('success','Produk Berhasil Diubah !');
        
    }

    public function destroy($product_category_id)
    {
        $product_catetory = ProductCategory::find($product_category_id);
        $product_catetory->delete();
        return redirect()->route('product_categories.index')
            ->with('success','Produk Berhasil Dihapus !');
        
    }
}
