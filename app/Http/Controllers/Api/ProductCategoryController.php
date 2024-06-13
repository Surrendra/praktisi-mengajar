<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;

class ProductCategoryController extends Controller
{
    public function getData()
    {
        $product_categories = ProductCategory::all();
        return $this->responseSuccess($product_categories);
    }

    public function create(Request $request)
    {
        $product_category = new ProductCategory();
        $product_category->name = $request->name;
        $product_category->description = $request->description;
        $product_category->save();
        return $this->responseSuccess($product_category, 'Product Category Created Successfully');       
    }

    public function update(Request $request,$id)
    {
        $product_category = ProductCategory::find($id);
        $product_category->name = $request->name;
        $product_category->description = $request->description;
        $product_category->save();
        return $this->responseSuccess($product_category, 'Product Category Updated Successfully');          
    }

    public function find($id)
    {
        $product_category = ProductCategory::find($id);
        return $this->responseSuccess($product_category);
    }

    public function delete($id)
    {
        $product_category = ProductCategory::find($id);
        $product_category->delete();
        return $this->responseSuccess($product_category, 'Product Category Deleted Successfully');          
    }
}
