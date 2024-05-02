<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductCategory;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'deleted_at'
    ];

    public function productCategory()
    {
        return $this->hasOne(ProductCategory::class,'id','product_category_id');
    }
}
